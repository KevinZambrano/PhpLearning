<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {


	public function action_index(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/user', $parametro);
		$this->response->body($vista);
	}
	
	public function action_cotiza(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/cotiza', $parametro);
		$this->response->body($vista);
	}
	
	public function action_total(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/total', $parametro);
		$this->response->body($vista);
	}
	
	public function action_contrataTuMaestro(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/contrataTuMaestro', $parametro);
		$this->response->body($vista);
	}
	
		public function action_trazadosNiveles(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$model_producto = new Model_Producto();
		$resultado = $model_producto->producto1();
		
		$parametro = array();	
		$parametro['resultado'] = $resultado;
		$vista = Kodwoo_View::factory('User/trazadosNiveles', $parametro);
		$this->response->body($vista);
	}
	
	public function action_cierros(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$model_producto = new Model_Producto();
		$resultado = $model_producto->producto2();
		
		$parametro = array();	
		$parametro['resultado'] = $resultado;
		$vista = Kodwoo_View::factory('User/cierros', $parametro);
		$this->response->body($vista);
	}
	
	public function action_instalacionConstruccionesPRO(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$model_producto = new Model_Producto();
		$resultado = $model_producto->producto3();
		
		$parametro = array();	
		$parametro['resultado'] = $resultado;	
		$vista = Kodwoo_View::factory('User/instalacionConstruccionesPRO', $parametro);
		$this->response->body($vista);
	}
	
	public function action_movimientoTierra(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/movimientoTierra', $parametro);
		$this->response->body($vista);
	}
	
	public function action_hormigones(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/hormigones', $parametro);
		$this->response->body($vista);
	}
	
	public function action_morteros(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/morteros', $parametro);
		$this->response->body($vista);
	}
	
	public function action_otros(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/otros', $parametro);
		$this->response->body($vista);
	}
	
	public function action_albanileria(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/albanileria', $parametro);
		$this->response->body($vista);
	}
	
	public function action_mamposteria(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 2){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('User/mamposteria', $parametro);
		$this->response->body($vista);
	}
}

	