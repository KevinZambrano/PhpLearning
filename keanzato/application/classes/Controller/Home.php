<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {


	public function action_index(){
		
		$session = Session::instance();
		$session->destroy();
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('home', $parametro);
		$this->response->body($vista);
	}
	
	public function action_usuario(){
		
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('usuario', $parametro);
		$this->response->body($vista);
	}
	
	public function action_login(){
		
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('login', $parametro);
		$this->response->body($vista);
	}
	
	public function action_iniciarSesion(){
		
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('login', $parametro);
		$this->response->body($vista);
	}
	public function action_registro(){
		
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('registro', $parametro);
		$this->response->body($vista);
	}
	
	public function action_contrataTuMaestro(){
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('contrataTuMaestro', $parametro);
		$this->response->body($vista);
	}
	
	
	public function action_validaLogin(){
		
		$usuario = isset($_POST['user'])?strip_tags($_POST['user']):'';
		$password = isset($_POST['pass'])?strip_tags($_POST['pass']):''; 
				
		if ($usuario != '' and $password != ''){
			$model_usuario = new Model_Usuario();	
			
			$resultado = $model_usuario->login($usuario, $password);
			
			if (isset($resultado[0])){
				
				$session = Session::instance();
				$session->set('tipo_usuario', $resultado[0]['tipo_usuario']);

				if ($resultado[0]['tipo_usuario'] == 1){
					HTTP::redirect('http://localhost:90/keanzato/Admin');
				}elseif($resultado[0]['tipo_usuario'] == 2){
					HTTP::redirect('http://localhost:90/keanzato/User');
				}
				
			}else{
			echo'Usuario o clave mal ingresados';}
		}
	}
}
	