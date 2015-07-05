<?php
    
    class contentController extends Controller
    {	
    	protected $username, $password, $email;
  
    	public function __construct(){
    		echo"<div class='center'>";
    	}    
    	    
        public function getStudents(){
            $temp = new contentModel;
            $results = $temp->getStudents();
            
            foreach ($results as $stud){
                echo $this->render(VIEWS.'contentView.php',
                            array("students"=>implode(" ",$stud))
                            );
            }
            
            echo'</div>';
        }
        
        
    }