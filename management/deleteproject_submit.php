<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $projid = whitelist($_POST['id']);
  
  print $projid;

  $projremovestmt = $dbh->prepare("DELETE FROM projects WHERE id = :id");
  $projremovestmt->bindParam(':id', $projid);
  $projremovestmt->execute();
  
  $taskremovestmt = $dbh->prepare("DELETE FROM tasklist WHERE project_id = :id");
  $taskremovestmt->bindParam(':id', $projid);
  $taskremovestmt->execute();
  
  $noteremovestmt = $dbh->prepare("DELETE FROM notes WHERE project_id = :id");
  $noteremovestmt->bindParam(':id', $projid);
  $noteremovestmt->execute();

  header("Location: /Projects/Work/management/projects.php");
  
?>