<?php

    class footerController extends Controller
    {
        public function __construct(){
            
            $data=array("name"=>"Octavia Bolojan");
            echo $this->render(VIEWS."footerView.php", $data);
            
            echo"</div>";
        }
    }