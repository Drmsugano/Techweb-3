<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require __DIR__.'/../cli-config.php';
require __DIR__.'/../app/routes/web.php';