<?php

    require_once'config.php';
    $object = new Controller;
    
    new headerController;
    new menuController;
     
    new lhsController;
    $contentShow = new contentController;
    $contentShow -> getStudents();
     
    new rhsController;
    new footerController;

	// ok - checked