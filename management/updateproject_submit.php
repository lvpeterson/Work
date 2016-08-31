<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $project_id = intval(whitelist($_GET['project']));
  $projectname = whitelist($_POST['name']);
  $status = whitelist($_POST['status']);
  $priority = whitelist($_POST['priority']);
  $deadline = whitelist($_POST['deadline']);
  $asignee = whitelist($_POST['asignee']);
  $description = whitelist($_POST['description']);
    
  
  $updateprojstmt = $dbh->prepare("UPDATE projects set name = :name, status = :status, priority = :priority, deadline = :deadline, asignee = :asignee, description = :description WHERE id = :proj_id");
  
  $updateprojstmt->bindParam(':name', $projectname);
  $updateprojstmt->bindParam(':status', $status);
  $updateprojstmt->bindParam(':priority', $priority);
  $updateprojstmt->bindParam(':deadline', $deadline);
  $updateprojstmt->bindParam(':asignee', $asignee);
  $updateprojstmt->bindParam(':proj_id', $project_id);
  $updateprojstmt->bindParam(':description', $description);
  
  $updateprojstmt->execute();
  
  header("Location: /Projects/Work/management/projects.php");
 
 ?>
