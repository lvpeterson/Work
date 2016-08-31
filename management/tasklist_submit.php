<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $project_id = intval(whitelist($_POST['project']));
  $taskname = whitelist($_POST['name']);
  $status = whitelist($_POST['status']);
  $priority = whitelist($_POST['priority']);
  $deadline = whitelist($_POST['deadline']);
  $asignee = whitelist($_POST['asignee']);
    
  
  $addtaskstmt = $dbh->prepare("INSERT INTO tasklist (name, status, priority, deadline, asignee, project_id, created) VALUES (:name, :status, :priority, :deadline, :asignee, :project_id, CURDATE())");
  
  $addtaskstmt->bindParam(':name', $taskname);
  $addtaskstmt->bindParam(':status', $status);
  $addtaskstmt->bindParam(':priority', $priority);
  $addtaskstmt->bindParam(':deadline', $deadline);
  $addtaskstmt->bindParam(':asignee', $asignee);
  $addtaskstmt->bindParam(':project_id', $project_id);
  
  $addtaskstmt->execute();
  
  header("Location: /Projects/Work/management/tasklist.php");
 
 ?>
