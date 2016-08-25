<?php
// Load config.php
require_once "Config/config.php";

if (isset($_GET['url'])) {
	$url = explode('/', $_GET['url']);
	actionController($url[0], $url[1]);
}else
	actionController("Home", "Index");