<?php
function actionController($controle, $metodo) {
	switch ($controle) {
		case "Home":
			actionMethodHome($metodo);
			break;
		case "User":
			actionMethodAccount($metodo);
			break;
		case "Merc":
			actionMethodMerchandise($metodo);
			break;
		default:
			actionMethodNotFound();
	}
}

function actionMethodHome($metodo) {
	require_once("Controller/HomeController.php");
	$page = new HomeController();
	switch ($metodo) {
		case "Index":
			$page->index();
			break;
		case "About":
			$page->about();
			break;
		case "Contact":
			$page->contact();
			break;
		default:
			actionMethodNotFound();
	}
}

function actionMethodAccount($metodo) {
	require_once("Controller/UserController.php");
	$page = new UserController();
	switch ($metodo) {
		case "Login":
			$page->login();
			break;
		case "checkLogin":
			$page->checkLogin();
			break;
		case "Logout":
			$page->logout();
			break;
		case "Cadastro":
			$page->signup();
			break;
		case "newUser":
			$page->newUser();
			break;
		default:
			actionMethodNotFound();
	}
}

function actionMethodMerchandise($metodo) {
	require_once("Controller/MerchandiseController.php");
	$page = new MerchandiseController();
	switch ($metodo) {
		case "Incluir":
			$page->incluir();
			break;
		case "NovaMercadoria":
			$page->novaMercadoria();
			break;
		case "TodasMercadoria":
			$page->todasMercadoria();
			break;
		case "View":
			$page->viewItem();
			break;
		default:
			actionMethodNotFound();
	}
}

function actionMethodNotFound() {
	require_once("Controller/Controller.php");
	$page = new Controller();
	$page->notFound();
}
?>