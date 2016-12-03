<?php

require 'vendor/autoload.php'; // composer autoloader
require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());

 ?>
