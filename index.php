<?php
include $_SERVER['DOCUMENT_ROOT']."/config/config.php";

if (isset($_GET['url'])) {
	$url = explode('/', $_GET['url']);
	actionController($url[0], $url[1]);
}else
	actionController("Home", "Index");
?>