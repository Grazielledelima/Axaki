<?php //HomeController.php
require_once 'Controller.php';
require_once './Model/MerchandiseModel.php';

class HomeController extends Controller {
	protected $conteudo;
	protected $dados;
	protected $model;
	
	public function __construct(MerchandiseModel $model=null) {
		$this->model = $model;
	}
	//Home/Index
	public function index(){
		//Definindo o titulo
		$this->title = "Home";
		
		//Conteudo são as views que serão colocadas na tela
		$this->conteudo = [
			'./View/Home/Index.php',
			//'./View/Merchandise/mercadoria_view.php'
			'./View/Merchandise/list_view_item.php'
		];
		
		//Pegando informções no banco de dados
		$this->model->list_view_item($this->model);
		while ($linha = $this->model->retornaDados("assoc")){
			$this->dados[] = $linha;
		}
		
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function about(){
		$this->title = "Sobre";
		
		$this->conteudo = ['./View/Home/About.php'];

		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function contact(){
		$this->title = "Contato";
		
		$this->conteudo = ['./View/Home/Contact.php'];
		
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
}
?>