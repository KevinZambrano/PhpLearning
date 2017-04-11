<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {


	public function action_index(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 1){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('Admin/home', $parametro);
		$this->response->body($vista);
	}
	
	public function action_editarProducto(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 1){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('Admin/editarProducto', $parametro);
		$this->response->body($vista);
	}
	
	public function action_cuentasUsuario(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 1){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('Admin/cuentasUsuario', $parametro);
		$this->response->body($vista);
	}
	
	public function action_listaUsarios(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 1){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('Admin/listaUsarios', $parametro);
		$this->response->body($vista);
	}
	
	public function action_eliminarUsuarios(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 1){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('Admin/eliminarUsuarios', $parametro);
		$this->response->body($vista);
	}
	
	public function action_AgregarEliminar(){
		
		$session = Session::instance();
		$tipousuario = $session->get('tipo_usuario');
		if ($tipousuario != 1){
			HTTP::redirect('http://localhost:90/keanzato/home');
			exit;
		}
		
		$parametro = array();	
		$vista = Kodwoo_View::factory('Admin/AgregarEliminar', $parametro);
		$this->response->body($vista);
	}
}
	