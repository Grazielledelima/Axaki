<?php
require_once 'Controller.php';
require_once './Model/MerchandiseModel.php';

//MerchandiseController
class MerchandiseController extends Controller {
	protected $title;
	protected $conteudo;
	protected $dados;
	
	public function incluir(){
		$this->title = "Vender Mercadoria";
		$this->conteudo = ['./View/Merchandise/incluir.php'];
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function novaMercadoria() {
		//Tipo e conteudo do Objeto
		$mercadoria = new Mercadoria(array(
			"nome" => $_POST['fnome'],
			"tipo" => $_POST['ftipo'],
			"quantidade" => $_POST['fquantidade'],
			"preco" => $_POST['fpreco'],
			"negocio" => 'VENDA'
		));
		
		//Executa o INSERT do objeto
		$mercadoria->inserir($mercadoria);
		
		//Redirecionamento
		header("location:/?url=Home/Index");
	}
	
	public function todasMercadoria() {
		$mercadoria = new Mercadoria();
		$mercadoria->selecionaTudo($mercadoria);
		
		while ($linha = $mercadoria->retornaDados("assoc")){
			$result[] = $linha;
		}
		//$mercadoria->retornaDados()
	}
	
	public function viewItem() {
		//Se Merc/View receber um $_GET['item']
		if (isset($_GET['item']) && !empty($_GET['item'])) {
			
			//Model/MerchandiseModel
			$mercadoria = new Mercadoria();
			$mercadoria->extras_select = " WHERE ". $mercadoria->campo_pk ."=".$_GET['item'];
			$mercadoria->selecionaTudo($mercadoria);
			$this->dados = $mercadoria->retornaDados();
			
			//Define um titulo para pagina
			$this->title = $this->dados->nome;
			$this->conteudo = ['./View/Merchandise/view_item.php'];
			
			//Renderizar Pagina
			$this->render($this->conteudo);
		}else
			$this->notFound();
	}
}
?>