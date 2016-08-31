<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $taskid = $_POST['id'];
  
  print $taskid;
  
  $taskremovestmt = $dbh->prepare("DELETE FROM tasklist WHERE id = :id");
  $taskremovestmt->bindParam(':id', $taskid);
  $taskremovestmt->execute();
  
  $noteremovestmt = $dbh->prepare("DELETE FROM notes WHERE task_id = :id");
  $noteremovestmt->bindParam(':id', $taskid);
  $noteremovestmt->execute();
  
  header("Location: /Projects/Work/management/tasklist.php");
  
?>