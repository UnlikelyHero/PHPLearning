<?php

require 'vendor/autoload.php'; // composer autoloader
require 'core/bootstrap.php';


Router::load('routes.php')
  ->direct(Request::uri(), Request::method());

 ?>
