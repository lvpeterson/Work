<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $task_id = intval(whitelist($_GET['task']));
  $taskname = whitelist($_POST['name']);
  $status = whitelist($_POST['status']);
  $priority = whitelist($_POST['priority']);
  $deadline = whitelist($_POST['deadline']);
  $asignee = whitelist($_POST['asignee']);
    
  
  $updatetaskstmt = $dbh->prepare("UPDATE tasklist set name = :name, status = :status, priority = :priority, deadline = :deadline, asignee = :asignee WHERE id = :task_id");
  
  $updatetaskstmt->bindParam(':name', $taskname);
  $updatetaskstmt->bindParam(':status', $status);
  $updatetaskstmt->bindParam(':priority', $priority);
  $updatetaskstmt->bindParam(':deadline', $deadline);
  $updatetaskstmt->bindParam(':asignee', $asignee);
  $updatetaskstmt->bindParam(':task_id', $task_id);
  
  $updatetaskstmt->execute();
  
  header("Location: /Projects/Work/management/tasklist.php");
 
 ?>
