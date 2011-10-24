<?php

class View {

	public $test="hgj";
	
	function __construct() {
		//echo 'this is the view';
		
	}

	public function render($name, $noInclude = false)
	{
		$this->test = 'component/com_content/view/index.php';
		
		/*if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			
			require 'views/header.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';	
		}*/
                
                require 'template/main/index.php';
		
		
	}
	
}