<?php


namespace Sockstack\Repository;

use Illuminate\Support\ServiceProvider;

class RepositoryGeneratorProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RepositoryGeneratorCommand::class
            ]);
        }
    }

    /**
     * 启动所有的应用服务。
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * 获取由提供者提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return [RepositoryGeneratorCommand::class];
    }
}