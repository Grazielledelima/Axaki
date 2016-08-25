<?php //Controller.php
abstract class Controller {
	protected $title;

	public function render($container = null){
		require_once(PATH_HEADER);
		
		if($container != null) {
			foreach ($container as $value){
				require_once($value);
			}
		}
		require_once(PATH_FOOTER);
	}
	
	public function notFound(){
		//Definindo o titulo
		$this->title = "Erro 404";
		
		require_once(PATH_HEADER);
		require_once('./View/Error.php');
		require_once(PATH_FOOTER);
	}
}