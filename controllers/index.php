<?php

$groceries = $query->fetchAllGroceries("groceries", "Grocery");

require 'views/index.view.php';