<?php
// Start session
session_start();

// Include config variables
require_once '_config.php';

// Include App class
require_once '_app.php';

// Init App
App::getInstance();
App::DBConnect($dbName, $dbUser, $dbPass, $dbHost);
