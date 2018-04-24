<?php

namespace Controllers;

class HomeController extends CoreController {
    public function __construct(){}
    
    public function index() {
        $data = ['nome' => 'teste'];
        $this->loadView('index.php', $data);
    }
}



?>