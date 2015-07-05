<?php 
	
	class lhsController extends Controller
	{
		public function __construct(){
		    
		    echo"<div class='main'>";
		    
		    echo"<div class='lhs'>";
		    
			$data = array("lhs" => "the left-hand-side of the page");
			echo $this->render(VIEWS.'lhsView.php', $data);
			
			echo "</div>";
		}
	}