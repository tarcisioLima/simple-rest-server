<?php

namespace Controllers\Api;

class PersonPOST extends CoreController {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function __call($m, $arg) {
        header('HTTP/1.0 404 Not Found');
    }

    public function sayHello() {
        $this->res200(NULL, "Sou um POST", ['METODO' => 'POST', 'CLASSE' => 'PESSOA']);
    }
}

?>