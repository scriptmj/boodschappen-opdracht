<?php

require 'functions.php';
require 'Grocery.php';
$query = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
