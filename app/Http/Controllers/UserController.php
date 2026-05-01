<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Traits\HttpResponses;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

class UserController extends BaseController
{

    use HttpResponses;

    protected mixed $crudRepository;

    public function __construct(UserRepositoryInterface $pattern)
    {
        $this->crudRepository = $pattern;
    }

    public function index()
    {
        try {
            $user = UserResource::collection($this->crudRepository->all());
            return $user->additional(JsonResponse::success());
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function register(UserRequest $request)
    {
        try {
            $data = $request->validated();
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            }
            $user = $this->crudRepository->create($data);

            return new UserResource($user);
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }





    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'remember' => 'boolean',
            ]);
// dd($request->all());
            if (RateLimiter::tooManyAttempts($request->ip(), 5)) {
                return response()->json(['message' => 'Too many login attempts. Please try again later.'], 429);
            }
            $remember = $request->has('remember');

            if (!Auth::attempt($request->only('email', 'password'), $remember)) {
                RateLimiter::hit($request->ip(), 60);
                return response()->json(['message' => 'The provided credentials are incorrect.'], 401);
            }

            RateLimiter::clear($request->ip());

            $user = Auth::user();
            if (is_null($user->email_verified_at)) {
                $user->email_verified_at = Carbon::now();
            }

            $user->save();

            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                "result" => "Success",
                'data' => new UserResource($user),
                'message' => 'User Logged In Successfully',
                'status' => true,
                'token' => $token
            ]);
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }


    public function logout(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->user()->tokens()->delete();

        if ($request->hasSession()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $this->success(null, 'Successfully logged out');
    }

    public function show(User $user): ?\Illuminate\Http\JsonResponse
    {
        try {
            return JsonResponse::respondSuccess('Item Fetched Successfully', new UserResource($user));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }





    public function update(UserRequest $request, User $user)
    {
        try {
            $data = $request->validated();
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }
            $this->crudRepository->update($data, $user->id);
            activity()->performedOn($user)->withProperties(['attributes' => $user])->log('update');
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_UPDATED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage(), 401);
        }
    }



    public function checkAuth(): ?\Illuminate\Http\JsonResponse
    {
        try {
            $user = auth()->user();
            return response()->json([
                "result" => "Success",
                'data' => new UserResource($user),
                'message' => 'User getting Successfully',
                'status' => true,
            ]);
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage(), 401);
        }
    }


    public function destroy(Request $request): ?\Illuminate\Http\JsonResponse
    {
        try {
            $this->crudRepository->deleteRecords('users', $request['items']);
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function restore(Request $request): ?\Illuminate\Http\JsonResponse
    {
        try {
            $this->crudRepository->restoreItem(User::class, $request['items']);
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_RESTORED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function forceDelete(Request $request): ?\Illuminate\Http\JsonResponse
    {
        try {
            $exists = User::whereIn('id', $request['items'])->exists();
            if (!$exists) {
                return JsonResponse::respondError("One or more records do not exist. Please refresh the page.");
            }
            $this->crudRepository->deleteRecordsFinial(User::class, $request['items']);
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_FORCE_DELETED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

}
