<?php

class Controller
	{
	    public function render($page, $data)
	    {
	    $template = file_get_contents($page);
	    //preg_match_all(pattern, pagina, rezultate);
	    preg_match_all('({{[a-zA-Z0-9_]*}})',$template,$matches);
	    
	    foreach($matches[0] as $value){
	        $key = str_replace("{{","",$value);
	        $key = str_replace("}}","",$key);
	        if(array_key_exists($key, $data)){
	            $template = str_replace($value,$data[$key],$template);
	        }
	    }
	    return $template;
	    }
	}
