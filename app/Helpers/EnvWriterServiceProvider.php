<?php

namespace App\Helpers;


use Illuminate\Support\ServiceProvider;

class EnvWriterServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(EnvWriter::class, function($app){
            return new EnvWriter($app->environmentFilePath());
        });
    }

}