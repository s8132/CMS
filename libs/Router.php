<?php

class Router{
    
    private $content;
    private $action;
    private $parameter;


    function __construct() {
        
        $url = $_GET['content'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
     //print_r($url);
        
        $this->content=$url[0];
        $this->action=$url[1];
        $this->parameter=$url[2];
        
        echo $url[1];
    }
    
    function getContent(){
        return $this->content;
    }
    
    function getAction(){
        return $this->action;       
    }
    
    function getParameter(){
        return $this->parameter;
    }
}
?>
