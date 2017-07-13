<?php

namespace Tlh\Mandrill;

use Illuminate\Support\ServiceProvider;

class MandrillServiceProvider extends ServiceProvider{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        //
    }

    /**
     * Register the mandrill service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('mandrill_mail', function($app){
            return new Mail(config('services.mandrill.api_key'));
        });

        $this->app->bind('Tlh\Mandrill\Mail', function($app){
            return new Mail(config('services.mandrill.api_key'));
        });

    }

}
