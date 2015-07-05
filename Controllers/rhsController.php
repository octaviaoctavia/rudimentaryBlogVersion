<?php 
	
	class rhsController extends Controller
	{
		public function __construct(){
		    
		    echo "<div class='rhs'>";
		    
			$data = array("rhs" => "the right-hand-side of the page ");
			echo $this->render(VIEWS.'rhsView.php', $data);
			
			echo"</div>";
			
			echo"</div>";
		}
	}