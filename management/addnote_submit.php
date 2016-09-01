<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $project_id = intval(whitelist($_GET['project']));
  $task_id = intval(whitelist($_GET['task']));
  $dash = intval(whitelist($_GET['dash']));
  $note = whitelist($_POST['note']);

  $addtaskstmt = $dbh->prepare("INSERT INTO notes (task_id, project_id, note) VALUES (:task_id, :project_id, :note)");
  
  $addtaskstmt->bindParam(':task_id', $task_id);
  $addtaskstmt->bindParam(':project_id', $project_id);
  $addtaskstmt->bindParam(':note', $note);

  
  $addtaskstmt->execute();
  if ($dash){
    header("Location: /Projects/Work/pages/dashboard.php");
    exit;
  }
  header("Location: /Projects/Work/management/tasklist.php");
 
?>