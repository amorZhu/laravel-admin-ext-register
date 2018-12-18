<?php

namespace Encore\Register;

use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Register $extension)
    {
        if (! Register::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'register');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/register')],
                'register'
            );
        }

        $this->app->booted(function () {
            Register::routes(__DIR__.'/../routes/web.php');
        });
    }
}