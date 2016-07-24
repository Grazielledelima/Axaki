<?php
require_once 'Controller.php';
require_once './Model/UserModel.php';

//AccountController
class UserController extends Controller {
	protected $conteudo;

	public function login(){
		//Definindo o titulo
		$this->title = "Login";
		
		//Definindo o conteudo da pagina
		$this->conteudo = [
			'./View/User/login.php'
		];
		
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function checkLogin(){
		$email = $_POST['user'];
		$senha = $_POST['pw'];
		
		$usuario = new Usuario();
		$usuario->extras_select = " WHERE email = '".$email."' AND  senha = '".$senha."'";
		$usuario->selecionaTudo($usuario);
		
		$result = $usuario->retornaDados("assoc");
		
		if($result != NULL){
			//echo 'Bem-vindo '.$result['nome'];
			$_SESSION['first_name'] = $result['nome'];
			$_SESSION['last_name'] = $result['sobrenome'];
			$_SESSION['email'] = $result['email'];
			header("location:/?url=Home/Index");
		}else {
			echo "<script>alert('Usuario e/ou senha Invalido(s). Tente novamente!');</script>";
			header("location:/?url=User/Login");
		}
		
		echo '<hr><pre>';
		print_r($result);
		var_dump($result);
		echo '</pre><hr>';
		
		//Redirecionamento
		//header("location:/?url=Home/Index");
	}
	
	public function logout() {
		(isset($_GET['logout'])) ? $logout = TRUE : $logout = FALSE;
		
		if($logout == TRUE)
			session_destroy();
		
		header("location:/?url=Home/Index");
	}
	
	public function signup(){
		//Definindo o titulo
		$this->title = "Cadastro";
		
		//Definindo o conteudo da pagina
		$this->conteudo = [
			'./View/User/signup.php'
		];
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function newUser(){
		//Tipo e conteudo do Objeto
		$usuario = new Usuario(array(
			"nome" => $_POST['first_name'],
			"sobrenome" => $_POST['last_name'],
			"senha" => $_POST['password'],
			"email" => $_POST['email']
		));
		
		//Executa o INSERT do objeto
		$usuario->inserir($usuario);
		
		echo $usuario->linhasAfetadas;
		
		$result = $usuario->retornaDados("assoc");
		if($usuario->linhasAfetadas < 1) {
			echo '<script type="text/javascript"> alert("Erro ao adicionar o item!");</script>';
			header("location:?url=User/Cadastro");
		}
		else{
			echo '<script type="text/javascript"> alert("Item adicionado com sucesso!");</script>';
			//Redirecionamento
			header("location:/?url=User/Login");
		}
		
	}

}
?>