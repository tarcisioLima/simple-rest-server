<?php

namespace Controllers;

abstract class CoreController {
    private $response;
    public function __construct() {}
    
    public function loadView($viewName, $datas = NULL) {
        if(isset($viewName)) {
            $data = [
                'viewValues' => $datas,
                'SESSION' => $_SESSION,
                'FOO' => 'BAR'
            ]; 
            include dirname(__DIR__) . '/views/' . $viewName;
            
        } else
            echo "<strong style='color: red'>Filename param is missing.</strong>";
    }
}