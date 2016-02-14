<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Load Environment File on Startup
|--------------------------------------------------------------------------
|
| This will determine, which environment will be loaded for our application.
|
*/
require __DIR__.'/environment.php';

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/


//if (App::environment()!='local' && App::environment()!='testing') {

use Monolog\Handler\GelfHandler;
use Monolog\Formatter\GelfMessageFormatter;
use Monolog\Processor\WebProcessor;
use Gelf\MessagePublisher;
use Illuminate\Support\Facades\Log;

if(true){

     try {

        $config  = 'log.wip.camp';
        $handler = new GelfHandler(new MessagePublisher('log.wip.camp', 30890));
        $handler->setFormatter(new GelfMessageFormatter(null));

        Log::getMonolog()->pushHandler($handler);
        Log::getMonolog()->pushProcessor(new WebProcessor($_SERVER));
        Log::getMonolog()->pushProcessor(function ($record) {
            //Need to filter values in auto-globals
            //This is because the gelf-php library will not allow 'extra'
            //values with a key of id to be added
            $filter = function (array $values) use (&$filter) {
                $ret = array();
                foreach ($values as $key => $value) {
                    if (in_array($key, array('id', 'HTTP_COOKIE'))) {
                        //If the key is id simply continue
                        //NOTE: we should consider how to handle this better.
                        continue;
                    } elseif (is_array($value)) {
                        $value = $filter($value);
                    }
                    $ret[$key] = $value;
                }

                return $ret;
            };

            if (count($_SERVER)) {
                $record['extra'] = array_merge($record['extra'], $filter($_SERVER));
            }
            if (count($_GET)) {
                $record['extra']['_GET'] = json_encode($filter($_GET));
            }
            if (count($_POST)) {
                $record['extra']['_POST'] = json_encode($filter($_POST));
            }

            if (count($_GET)) {
                $record['extra']['request_get'] = json_encode($filter($_GET));
            }

            if (count($_POST)) {
                $record['extra']['request_post'] = json_encode($filter($_POST));
            }

            return $record;
        });

    } catch ( Exception $e ) {

    }
}

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
