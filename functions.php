<?php

require ('database/DBController.php');
require('database/Table.php');

$db = new DBController();
$table = new Table($db);
