<?php

class Bootstrap{
    
    public $test='test';
    
    function __construct() {
        
        if(isset($_GET['content'])){
           
            $url = $_GET['content'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);
        
            $file = 'component/com_'.$url[0].'/controller/index.php';
        
            if(file_exists($file)){
                require $file;
            }else{
                echo "Error";
            }
            
            $controller = new Index();
            
            if(isset($url[2])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}($url[2]);
                }else{
                    echo "Eroor";
                }
            }else{
                if(isset($url[1])){
                    if(method_exists($controller, $url[1])){
                        $controller->{$url[1]}();
                    }else{
                        echo "error";
                    }
                }else{
                     $controller->index();
                }
            
            } 
       }else{
                require 'component/com_frontpage/controller/index.php';
                $controller = new Index();
        }
       
       
    }
}

?>
