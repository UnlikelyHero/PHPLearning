<?php

App::get('database')->insert('users', [
  //$parameters that are passed
  'name' => $_POST['name']

]);

header('Location: /');
 ?>
