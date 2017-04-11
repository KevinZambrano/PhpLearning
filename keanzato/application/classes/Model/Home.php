<?php

class Model_Home extends Kohana_Database_MySQL {

    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn, array());
    }

    public function propiedadHome() {
        $parametros = array();
        return $this->exec('propiedadHome', $parametros, 'return');
    }

}

?>