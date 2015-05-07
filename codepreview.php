<?php
	include 'style/newconfig.php'; 	// the 'database' (because I didn't pay attention in SQL class)

	if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = null;
    
    $theCode = new Code();
    $codeMe = $theCode->displayCode($id);
    echo eval("?>".html_entity_decode($theCode->getSource($id))."<?");
  
