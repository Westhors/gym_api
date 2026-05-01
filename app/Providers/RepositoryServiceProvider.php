<?php

namespace App\Providers;

use App\Interfaces\PackageRepositoryInterface;
use App\Interfaces\ResultRepositoryInterface;
use App\Interfaces\TrainingRepositoryInterface;
use App\Repositories\PackageRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\ResultRepository;
use App\Repositories\TrainingRepository;
use App\Repositories\UserRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(PackageRepositoryInterface::class, PackageRepository::class);
        $this->app->bind(ResultRepositoryInterface::class, ResultRepository::class);
        $this->app->bind(TrainingRepositoryInterface::class, TrainingRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}


