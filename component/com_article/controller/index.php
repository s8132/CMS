<?php

class Index extends Controller {

    
    function __construct() {
        parent::__construct();
        
        echo "Article Controller";
    }
    
    function index(){
        
        echo "Article index controoler";
    }
    
    public function view($id){
        echo "Oglądasz artykuł<br />";
        echo "id artykułu = ".$id;
    }
    
	/*function __construct() {
		parent::__construct();
	}
	
	function index() {
		//echo 'INSIDE INDEX INDEX';
		$this->view->render('index/index');
	}
	
	function details() {
		$this->view->render('index/index');
	}*/
	
}
?>
