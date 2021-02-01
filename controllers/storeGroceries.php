<?php

var_dump($_POST);
$query->insert("groceries", $_POST);

header('Location: /groceries');