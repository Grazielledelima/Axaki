<?php //UserModel.php
require_once './Classes/base.class.php';

class Usuario extends Base {
	//SELECT `id`, `nome`, `sobrenome`, `senha`, `email` FROM `usuario` WHERE 1
	public function __construct($campos=array()) {
		parent::__construct();
		
		//Nome da tabela
		$this->tabela = "usuario";
		
		//Definindo campos
		if(sizeof($campos) <= 0) {
			$this->campos_valores = array(
				"nome" => NULL,
				"sobrenome" => NULL,
				"senha" => NULL,
				"email" => NULL
			);
		}else {
			$this->campos_valores =	$campos;
		}
		
		//Primary Key da tabela
		$this->campo_pk = "id";
	}
}
?>
