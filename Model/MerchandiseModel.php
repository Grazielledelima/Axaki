<?php //MerchandiseModel.php
require_once './Classes/base.class.php';

class Mercadoria extends Base {
	//INSERT INTO `mercadoria`(`codigo`, `nome`, `tipo`, `quantidade`, `preco`, `negocio`)
	public function __construct($campos=array()) {
		parent::__construct();
		
		//Nome da tabela
		$this->tabela = "mercadoria";
		
		//Definindo campos
		if(sizeof($campos) <= 0) {
			$this->campos_valores = array(
				"codigo" => NULL,
				"nome" => NULL,
				"tipo" => NULL,
				"quantidade" => NULL,
				"preco" => NULL,
				"negocio" => NULL
			);
		}else {
			$this->campos_valores =	$campos;
		}
		
		//Primary Key da tabela
		$this->campo_pk = "codigo";
	}
}
?>