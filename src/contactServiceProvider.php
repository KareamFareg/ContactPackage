<?php

namespace Kaream\Contact;
use Illuminate\Support\ServiceProvider;
class contactServiceProvider extends ServiceProvider{

    public function register(){

    }
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');
        $this->publishes([
            __DIR__.'/config/contact.php'=>config_path('contact.php'),
            __DIR__.'/database/migrations/'=>database_path('migrations'),
            __DIR__.'/public' => public_path('Kaream/contacts'),
            __DIR__.'/views' => resource_path('views/Kaream/contact'),
        ]);
    }
}