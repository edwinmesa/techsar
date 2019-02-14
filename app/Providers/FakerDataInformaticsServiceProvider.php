<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FakerDataInformaticsServiceProvider extends \Faker\Provider\Base
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
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

    /**
     * @var array
     * return string
     */
    protected static $monitor = array(
        'Monitor CTR', 'Monitor LCD',/*2003 to 2005*/
        'Monitor TFT','LED', /*2006 to 2007*/
        'DLP', 'OLED ','Super AMOLED' /*2008 to now*/
    );

    /**
     * @example 'Monitor CTR'
     * @return string
     */
    public function monitor()
    {
        return static::randomElement(static::$monitor);
    }

    /**
     * @var array
     * return string
     */
    protected static $models = array(
        'UM','UL','UK','SW','KJ','HG','MB', 'KJ', 'NB'
    );

    /**
     * @example 'UM'
     * @return string
     */
    public function models()
    {
        return static::randomElement(static::$models);
    }



}
