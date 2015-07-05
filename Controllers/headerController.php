<?php

    class headerController extends Controller
    {
        public function __construct(){
            
            echo"<div class='container'>";
            
            $data = array("title" => "Blog title version 1.0");
            
            echo $this->render(VIEWS.'headerView.php', $data);
        }
        
    }