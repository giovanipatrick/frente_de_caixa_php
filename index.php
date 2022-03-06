<?php
require 'vendor/autoload.php';
use App\Helpers\LoadEnv;
use App\Routes\RouteService;
try {
    LoadEnv::transform();
RouteService::initiate();
} catch (\Throwable $th) {
    echo $th->getMessage();
}