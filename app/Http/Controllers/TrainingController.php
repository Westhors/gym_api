<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Requests\TrainingRequest;
use App\Http\Resources\TrainingResource;
use App\Interfaces\TrainingRepositoryInterface;
use App\Models\Training;
use App\Traits\HttpResponses;
use Exception;
use Illuminate\Http\Request;

class TrainingController extends BaseController
{
    use HttpResponses;

    protected mixed $crudRepository;

    public function __construct(TrainingRepositoryInterface $pattern)
    {
        $this->crudRepository = $pattern;
    }

    public function index()
    {
        try {
            $Training = TrainingResource::collection($this->crudRepository->all());
            return $Training->additional(JsonResponse::success());
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }


    public function store(TrainingRequest $request)
    {
        try {
           $Training = $this->crudRepository->create($request->validated());
            if (request('image') !== null) {
                $this->crudRepository->AddMediaCollection('image', $Training);
            }
            if (request('video') !== null) {
                $this->crudRepository->AddMediaCollection('video', $Training , 'video');
            }
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_ADDED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }


    public function show(Training $training): ?\Illuminate\Http\JsonResponse
    {
        try {
            return JsonResponse::respondSuccess('Item Fetched Successfully', new TrainingResource($training));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function Update(TrainingRequest $request, Training $training)
    {
        try {
            $this->crudRepository->update($request->validated(), $training->id);

            // رجع الموديل بعد التحديث
            $training = Training::find($training->id);

            if ($request->filled('image')) {
                $this->crudRepository->AddMediaCollection('image', $training);
            }

            if ($request->filled('video')) {
                $this->crudRepository->AddMediaCollection('video', $training , 'video');
            }

            return JsonResponse::respondSuccess(
                trans(JsonResponse::MSG_UPDATED_SUCCESSFULLY),
                new TrainingResource($training)
            );

        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function destroy(Request $request): ?\Illuminate\Http\JsonResponse
    {
        try {
            $this->crudRepository->deleteRecords('trainings', $request['items']);
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function restore(Request $request): ?\Illuminate\Http\JsonResponse
    {
        try {
            $this->crudRepository->restoreItem(Training::class, $request['items']);
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_RESTORED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public function forceDelete(Request $request): ?\Illuminate\Http\JsonResponse
    {
        try {
            $exists = Training::whereIn('id', $request['items'])->exists();
            if (!$exists) {
                return JsonResponse::respondError("One or more records do not exist. Please refresh the page.");
            }
            $this->crudRepository->deleteRecordsFinial(Training::class, $request['items']);
            return JsonResponse::respondSuccess(trans(JsonResponse::MSG_FORCE_DELETED_SUCCESSFULLY));
        } catch (Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}

