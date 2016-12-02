<?php

require 'vendor/autoload.php'; // composer autoloader
require 'core/bootstrap.php';


require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());

 ?>
