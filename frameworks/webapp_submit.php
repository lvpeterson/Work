<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $testname = whitelist($_POST['name']);
  $description = whitelist($_POST['description']);
  $asignee = whitelist($_POST['asignee']);
  

  $addteststmt = $dbh->prepare("INSERT INTO webapptests (testname, description, asignee, created) VALUES (:testname, :description, :asignee, CURDATE())");
  
  $addteststmt->bindParam(':testname', $testname);
  $addteststmt->bindParam(':description', $description);
  $addteststmt->bindParam(':asignee', $asignee);

  
  $addteststmt->execute();
  header("Location: /Projects/Work/frameworks/webapp.php");
 
?>