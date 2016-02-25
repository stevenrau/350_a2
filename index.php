<?php

require_once('models/connection.php');

echo "Hello World <br>";

$DB = Database::getInstance();

Database::printText();

?>

