<?php 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DummyServiceProvider extends ServiceProvider
{
    /**
    *Bootstrap the application service.
    *
    *@return void
    */
    public function boot()
    {
        //
        echo 'Boot';
    }
    
    /**
    *Register the application service.
    *
    *@return void
    */
    public function register()
    {
        //
        echo 'Register';
    }
}

?>