<?php

class DBModel{
    const HOST = "localhost"; // poate fi http://128.199.36.184/   sau pot fi private $HOST
    const USER= "obolojan";
    const PASS = "password";
    const DB = "obolojan";
    
    
    private $connection;
    
    
    public function __construct(){
        $this -> connection = new mysqli(self::HOST, self::USER,                  
                                     self::PASS, self::DB);
        if ($this -> connection -> connect_error){
            die("Connection ERROR: ". $this -> connection -> connect_error);
        }else{
            echo "Connection OKKK!!!";
        }
    }
    
    public function db(){
        return $this -> connection;         // functie getter
    }
    
    public function closeDB(){
        $this -> connection -> close();       
    }
}

   // $obj = new Connection;  ne asig ca functioneaza