<?php
  
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $url = $_POST['url'];
  $webapp_id = whitelist($_GET['id']);
  
  $addidentspecstmt= $dbh->prepare("INSERT INTO identifier_specified_funcs (webapp_id, url) VALUES (:webapp_id, :url)");
  $addidentspecstmt->bindParam(':webapp_id', $webapp_id);
  $addidentspecstmt->bindParam(':url', $url);

  $addidentspecstmt->execute();

  header("Location: /Projects/Work/frameworks/webapp_details.php?id=$webapp_id");
 
?>