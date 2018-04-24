<?php

namespace Controllers;

class NotFoundController extends CoreController {
    public function __construct(){}
    
    public function index() {
        http_response_code(404);
        $this->loadView('not-found.php');
    }
}



?>