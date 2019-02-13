<?php

namespace App\Providers;

class FakerServiceProvider extends \Faker\Provider\Base
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


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


    protected static $modelName = array(
        'Arduino Zero',
        'Arduino Zero Pro',
        'Arduino Due',
        'Arduino Yun',
        'Arduino Leonardo',
        'Arduino Uno',
    );

    public static function modelName()
    {
        return static::randomElement(static::$modelName);
    }


}
