<?php 

$config = require 'config.php';

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Request.php';

return new QueryBuilder(
    Connection::connectToDB($config["database"])
);