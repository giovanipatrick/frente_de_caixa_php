<?php
require 'vendor/autoload.php';
use App\Helpers\LoadEnv;
use App\Routes\RouteService;
LoadEnv::transform();
RouteService::initiate();