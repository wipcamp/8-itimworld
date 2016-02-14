<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Monolog\Handler\GelfHandler;
use Monolog\Formatter\GelfMessageFormatter;
use Monolog\Processor\WebProcessor;
use Gelf\MessagePublisher;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //
        // $logFile = 'log-'.php_sapi_name().'.txt';
        //
        // Log::useDailyFiles(storage_path().'/logs/'.$logFile);
        //
        // if(true){
        //
        //      try {
        //
        //         $config  = 'log.wip.camp';
        //         $handler = new GelfHandler(new MessagePublisher('log.wip.camp', 30890));
        //         $handler->setFormatter(new GelfMessageFormatter(null));
        //
        //         Log::getMonolog()->pushHandler($handler);
        //         Log::getMonolog()->pushProcessor(new WebProcessor($_SERVER));
        //         Log::getMonolog()->pushProcessor(function ($record) {
        //             //Need to filter values in auto-globals
        //             //This is because the gelf-php library will not allow 'extra'
        //             //values with a key of id to be added
        //             $filter = function (array $values) use (&$filter) {
        //                 $ret = array();
        //                 foreach ($values as $key => $value) {
        //                     if (in_array($key, array('id', 'HTTP_COOKIE'))) {
        //                         //If the key is id simply continue
        //                         //NOTE: we should consider how to handle this better.
        //                         continue;
        //                     } elseif (is_array($value)) {
        //                         $value = $filter($value);
        //                     }
        //                     $ret[$key] = $value;
        //                 }
        //
        //                 return $ret;
        //             };
        //
        //             if (count($_SERVER)) {
        //                 $record['extra'] = array_merge($record['extra'], $filter($_SERVER));
        //             }
        //             if (count($_GET)) {
        //                 $record['extra']['_GET'] = json_encode($filter($_GET));
        //             }
        //             if (count($_POST)) {
        //                 $record['extra']['_POST'] = json_encode($filter($_POST));
        //             }
        //
        //             if (count($_GET)) {
        //                 $record['extra']['request_get'] = json_encode($filter($_GET));
        //             }
        //
        //             if (count($_POST)) {
        //                 $record['extra']['request_post'] = json_encode($filter($_POST));
        //             }
        //
        //             return $record;
        //         });
        //
        //     } catch ( Exception $e ) {
        //
        //     }
        // }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
