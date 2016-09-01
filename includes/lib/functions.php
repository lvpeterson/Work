<?php

  $docroot = $_SERVER["DOCUMENT_ROOT"];
  
  session_start();
  
  date_default_timezone_set("America/Los_Angeles"); // Default time zone
  
  // DB LOGIN INFO:
  $mysql_hostname = 'localhost';
  $mysql_username = 'workmanager';
  $mysql_password = '5NF6H6HMRF8z7489';
  $mysql_dbname   = 'workmanager';
  
  global $dbh;
  $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //---------------------------------------------------------------------------------------------------------//
 
  function get_notes(){
    
    global $dbh;
    
    $notestmt = $dbh->prepare("SELECT * from notes");
    $notestmt->execute();
    $noteresult = $notestmt->fetchAll();
      
    $_SESSION['notes'] = $noteresult;
  }
  
  function get_projects(){
  
    global $dbh;
    
    $projliststmt = $dbh->prepare("SELECT * from projects");
    $projliststmt->execute();
    $projresult = $projliststmt->fetchAll();
    
    return $projresult;
  
  }
 
  function get_project_progress($proj_id){
    
    global $dbh;
    
    $complistname = 'Complete';
    
    $progresstmt = $dbh->prepare("SELECT SUM(weight) from tasklist where project_id = :proj_id");
    $progresstmt->bindParam(':proj_id', $proj_id);
    $progresstmt->execute();
    
    $progtotal = $progresstmt->fetchColumn();
    
    $progresstmt = $dbh->prepare("SELECT SUM(weight) from tasklist where project_id = :proj_id AND status = :list_name");
    $progresstmt->bindParam(':proj_id', $proj_id);
    $progresstmt->bindParam(':list_name', $complistname);
    $progresstmt->execute();
    
    $progcomplete = $progresstmt->fetchColumn();
    
    if ($progtotal == 0) {
      return 0;
    }
    
    return $progcomplete/$progtotal;
 
  }
  
  function get_project_name($proj_id){
    global $dbh;
    
    $projnamestmt = $dbh->prepare("SELECT name from projects where id = :proj_id");
    $projnamestmt->bindParam(':proj_id', $proj_id);
    $projnamestmt->execute();
    
    $projnameresult = $projnamestmt->fetchColumn();
    return $projnameresult;
  }
  
  function get_tasklist(){
    
    global $dbh;
    
    $todoliststmt = $dbh->prepare("SELECT * from tasklist");
    $todoliststmt->execute();
    $todoresult = $todoliststmt->fetchAll();
    
    return $todoresult;
  }
  
  function nav_links($groupid = NULL){
    global $dbh;
    
    $navlinkstmt = $dbh->prepare("SELECT * FROM nav_links");
    
    $navlinkstmt->execute();
    $result = $navlinkstmt->fetchAll();
     
    return $result;
  }
  
  function nav_menus(){
  
    global $dbh;
    
    $links = nav_links();
    $menus = array();
    
    foreach($links as $link){
      if(!array_key_exists($link['nav_menu_id'], $menus)){
	  $navmenustmt = $dbh->prepare("select * from nav_menus nm where id = :nav_id");
	  $navmenuid = $link['nav_menu_id'];
	  $navmenustmt->bindParam(':nav_id', $navmenuid);
	  $navmenustmt->execute();
	  
	  $result = $navmenustmt->fetchAll();
	  $result = $result[0];
	  
	  $menus[$link['nav_menu_id']] = $result;
	  $menus[$link['nav_menu_id']]['links'] = array();
      } 
    }
    
    ksort($menus);
    
    foreach($links as $link){
      array_push($menus[$link['nav_menu_id']]['links'], $link);
    }

    $_SESSION['nav_menus'] = $menus;

  }
  
  function whitelist($string){
    return preg_replace('/[^A-Za-z0-9!_@#\$%\^&*().?:\-\/\\ ]/', '', $string);
  }