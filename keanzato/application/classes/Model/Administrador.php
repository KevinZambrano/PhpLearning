<?php

class Model_Administrador extends Kohana_Database_MySQL {

    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn, array());
    }

    public function login($usuario, $password) {
        $parametros = array();
		$parametros['usuario'] = $usuario;
		$parametros['password'] = $password;
        return $this->exec('login', $parametros, 'return');
    }

}

?>