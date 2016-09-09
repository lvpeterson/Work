<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $webapp_id = intval(whitelist($_GET['project']));
  $webapp = whitelist($_POST['name']);
  $asignee = whitelist($_POST['asignee']);
  $description = whitelist($_POST['description']);
    
  $updatewebappstmt = $dbh->prepare("UPDATE webapptests set testname = :name, asignee = :asignee, description = :description WHERE id = :app_id");
  
  $updatewebappstmt->bindParam(':name', $webapp);
  $updatewebappstmt->bindParam(':asignee', $asignee);
  $updatewebappstmt->bindParam(':app_id', $webapp_id);
  $updatewebappstmt->bindParam(':description', $description);
  
  $updatewebappstmt->execute();
  
  header("Location: /Projects/Work/frameworks/webapp.php");
 
 ?>
