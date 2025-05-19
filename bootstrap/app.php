<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

// Aquí puedes registrar bindings adicionales si lo necesitas

return $app;