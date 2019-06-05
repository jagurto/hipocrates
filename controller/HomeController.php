<?php

session_start();
class HomeController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

	function VerificarLogin(){
		if (!isset($_SESSION['rut'])) {
			return false;
		} else {
			return true;
		}
	}

	public function index(){
		$log=$this->VerificarLogin();
		if(!$log)
			$this->view("Login",array());
		else {
			$user=new Usuario($this->adapter);
			$res=$user->getBy("rut",$_SESSION['rut']);
			
			$user->setByResult($res[0]);
			$this->view("Home",array("usuario"=>$user));
		};
	}
		
	public function login(){
		$user=new Usuario($this->adapter);
		$res=$user->getBy("rut",$_POST['rut']);
		
		if(isset($res)){
			if ($res[0]->pass == $_POST['pass']){
				$user->setByResult($res[0]);
				$_SESSION['rut'] = $user->getRut();
				$this->view("home",array("usuario"=>$user));
			} else {
				$this->view("Login",array("msg"=>"Usuario no coincide con su contraseña"));
			}
		} else {
			$this->view("Login",array("msg"=>"Usuario no encontrado"));
		}
	}

	public function salir(){
		unset($_SESSION['rut']);
		$this->view("Login",array());
	}
}
?>
