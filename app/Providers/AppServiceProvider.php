<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Src\Domain\Intervention\Repositories\TaskRepository;
use App\Src\Infrastructure\Persistence\Intervention\EloquentTaskRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TaskRepository::class, EloquentTaskRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
