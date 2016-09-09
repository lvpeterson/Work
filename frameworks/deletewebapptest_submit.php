<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $webtestid = whitelist($_POST['id']);

  $webappremovestmt = $dbh->prepare("DELETE FROM webapptests WHERE id = :id");
  $webappremovestmt->bindParam(':id', $webtestid);
  $webappremovestmt->execute();

  header("Location: /Projects/Work/frameworks/webapp.php");
  
?>