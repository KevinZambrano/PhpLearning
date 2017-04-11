<?php

class Model_Producto extends Kohana_Database_MySQL {

    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn, array());
    }

    public function producto1() {		
        $parametros = array();
        return $this->exec('producto1', $parametros, 'return');
    }
	
	 public function producto2() {		
        $parametros = array();
        return $this->exec('producto2', $parametros, 'return');
    }
	
	 public function producto3() {		
        $parametros = array();
        return $this->exec('producto3', $parametros, 'return');
    }
	
    public function estadisticas($usuario) {		
        $parametros = array();
		$parametros['usuario'] = $usuario;
        return $this->exec('estadisticas', $parametros, 'return');
    }
	
	
	  
}

?>