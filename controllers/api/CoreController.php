<?php

namespace Controllers\Api;

abstract class CoreController {
    private $response;
    public function __construct() {}
    
    public function res200($cd, $msg, $data){
        $this->response = array ("cd" => $cd, "msg" => $msg, "data" => $data);
        http_response_code(200);
        header('Content-Type: application/json');
        echo json_encode($this->response);
    }
    
    public function res400($cd, $msg){
        $this->response = array ("cd" => $cd, "msg" => $msg);
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode($this->response);
    }
}


?>