<?php

$app['database']->insert('users', [
  //$parameters that are passed
  'name' => $_POST['name']

]);

header('Location: /');
 ?>
