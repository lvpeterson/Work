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
  
  function generate_google_hack($domain){
    $googlehacks = [];
  
  
  }
  
  function get_date_offset(){
    if( date("D") == "Sun" ){
      return array(0,6);
    }
    if( date("D") == "Mon" ){
      return array(1,5);
    }
    if( date("D") == "Tue" ){
      return array(2,4);
    }
    if( date("D") == "Wed" ){
      return array(3,3);
    }
    if( date("D") == "Thu" ){
      return array(4,2);
    }
    if( date("D") == "Fri" ){
      return array(5,1);
    }
    if( date("D") == "Sat" ){
      return array(6,0);
    }
  }
  
  function get_current_week(){
    $thisweek = [];
    list($negativeoff, $positiveoff) = get_date_offset();
    // Get negative offset and push to array
    $count = 0;
    for($count = 1; $count < $negativeoff+1; $count++){
      array_push($thisweek, date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")-$count, date("Y"))));
    }
    // Get today and push to array
      //array_push($thisweek, date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d"), date("Y"))));
    // Get positive offset and push to array
    for($count = 0; $count < $positiveoff+1; $count++){
      array_push($thisweek, date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+$count, date("Y"))));
    }
    return $thisweek;
  }
  
  function get_help($category){
    
    global $dbh;
    $helpstmt = $dbh->prepare('SELECT * from help_info');
    $helpstmt->execute();
    
    $helpresult = $helpstmt->fetchAll();
    $_SESSION['help_info'] = $helpresult;
    
  }
  
  function get_ident_funcs($webappid){
  
    global $dbh;
    
    $identfuncstmt = $dbh->prepare("SELECT * from identifier_specified_funcs where webapp_id = :webapp_id");
    $identfuncstmt->bindParam(':webapp_id', $webappid);
    $identfuncstmt->execute();
    $identfuncresult = $identfuncstmt->fetchAll();
    
    return $identfuncresult;
  }
  
  function get_next_week(){
    $nextweek = [];
    list($negativeoff, $positiveoff) = get_date_offset();
    // Get negative offset and push to array
    $count = 0;
    for($count = 1; $count < $negativeoff+1; $count++){
      array_push($nextweek, date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d") + 7 - $count, date("Y"))));
    }
    // Get today and push to array
      array_push($nextweek, date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d") + 7, date("Y"))));
    // Get positive offset and push to array
    for($count = 0; $count < $positiveoff+1; $count++){
      array_push($nextweek, date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d") + 7 + $count, date("Y"))));
    }
    return $nextweek;
  }
  
  function get_nikto_reports($webappid){
  
    global $dbh;
    
    $niktoreportstmt = $dbh->prepare("SELECT * from nikto_reports where webapp_id = :webapp_id");
    $niktoreportstmt->bindParam(':webapp_id', $webappid);
    $niktoreportstmt->execute();
    $niktoresult = $niktoreportstmt->fetchAll();
    
    return $niktoresult;
  }
 
  function get_notes($task_id = NULL){
    
    global $dbh;

    
    if ($task_id == NULL){
      $notestmt = $dbh->prepare("SELECT * from notes");
    }
    else{
      $notestmt = $dbh->prepare("SELECT * from notes where task_id = :task_id");
      $notestmt->bindParam(':task_id', $task_id);
    }
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
  
  function get_webapp_details($webappid){
    global $dbh;
    
    $webappnamestmt = $dbh->prepare("SELECT * from webapptests where id = :id");
    $webappnamestmt->bindParam(':id', $webappid);
    $webappnamestmt->execute();
    $webappnameresult = $webappnamestmt->fetchAll();
    
    return $webappnameresult[0];
  }
  
  function get_webapp_domains($webappid){
    global $dbh;
   
    $webappdomainstmt = $dbh->prepare("SELECT * from webapp_domains where webapp_id = :webapp_id");
    $webappdomainstmt->bindParam(':webapp_id', $webappid);
    $webappdomainstmt->execute();
    $webappdomainresult = $webappdomainstmt->fetchAll();
    
    return $webappdomainresult;
  }
  
  function get_webapptests(){
    global $dbh;
    
    $webappteststmt = $dbh->prepare("SELECT * from webapptests");
    $webappteststmt->execute();
    $webapptestresult = $webappteststmt->fetchAll();
    
    return $webapptestresult;
  
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