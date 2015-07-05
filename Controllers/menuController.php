<?php 
	
	class menuController extends Controller
	{
		public function __construct(){
		    
		    echo"<div class='menu'><ul>";
			
			$menu = array("Home","Projects","About","Contact");
			foreach($menu as $navMenu){
				echo $this->render(VIEWS."menuView.php",
									array("menuItem" => $navMenu));
			}
			
			echo"</ul></div>";
			
		}
	}