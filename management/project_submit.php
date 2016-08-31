<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $projectname = whitelist($_POST['name']);
  $status = whitelist($_POST['status']);
  $priority = whitelist($_POST['priority']);
  $deadline = whitelist($_POST['deadline']);
  $asignee = whitelist($_POST['asignee']);
  $description = whitelist($_POST['description']);

  $addprojstmt = $dbh->prepare("INSERT INTO projects (name, status, priority, deadline, asignee, description, created) VALUES (:name, :status, :priority, :deadline, :asignee, :description, CURDATE())");
  
  $addprojstmt->bindParam(':name', $projectname);
  $addprojstmt->bindParam(':status', $status);
  $addprojstmt->bindParam(':priority', $priority);
  $addprojstmt->bindParam(':deadline', $deadline);
  $addprojstmt->bindParam(':asignee', $asignee);
  $addprojstmt->bindParam(':description', $description);
  
  $addprojstmt->execute();
  
  header("Location: /Projects/Work/management/projects.php");
 
 ?>
