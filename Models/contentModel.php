<?php 
	
	class contentModel extends DBModel
	{   
	    protected $username, $password, $email;
    
		public function getStudents(){
			$query = "SELECT * FROM students WHERE id < 5";
			$result = $this -> db() -> query($query);
			//var_dump($results);
			
			foreach($result as $stud){
				$stud_array[] = $stud;
			}
			return $stud_array;
		}
		
    
    // public function loginCheck($username, $password)
    // {
    //     $ok = false;
    //     $query = "SELECT * 
    //             FROM students 
    //             WHERE username='{$username}' AND password='{$password}' 
    //             ";

    //     $result = $this->db()->query($query);        
    //     if ($result->num_rows > 0)
    //         {
    //         $ok = true;
    //         }
           
    //     return $ok;    
    // }		
	
	}