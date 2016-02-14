<?php
/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/
$envMapping = [
    'itim.wip.loc'  => 'kati',
    'itim.freezer.wip.camp'  => 'vanila',
    'itim.wip.camp' => 'kati'
];

$env = $app->detectEnvironment(function() use ($envMapping){
    $env_path = isset($_SERVER['HTTP_HOST']) && isset($envMapping[$_SERVER['HTTP_HOST']])
                ? $envMapping[$_SERVER['HTTP_HOST']]
                : 'kati';

    putenv('APP_ENV='.$env_path);
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../', '.' . getenv('APP_ENV') . '.env'); // Laravel 5.2
    $dotenv->overload(); //this is important

    return $env_path;
    //$environmentPath = __DIR__.'/../.env';
    // $setEnv = trim(file_get_contents($environmentPath));
    //
    // if (file_exists($environmentPath))
    // {
    //     $setEnv = trim(file_get_contents($environmentPath));
    //     putenv('APP_ENV='.$setEnv);
    //     $dotenv = new Dotenv\Dotenv(__DIR__ . '/../', '.' . getenv('APP_ENV') . '.env'); // Laravel 5.2
    //     $dotenv->overload(); //this is important
    // }
});
