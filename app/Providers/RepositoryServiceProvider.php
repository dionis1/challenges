<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ChallengeRepositoryInterface;
use App\Repositories\ChallengeRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ChallengeRepositoryInterface::class, ChallengeRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
