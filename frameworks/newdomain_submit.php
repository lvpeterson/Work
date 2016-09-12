<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $domainname = whitelist($_POST['domain']);
  $webappid = whitelist($_GET['id']);
  

  $adddomainstmt = $dbh->prepare("INSERT INTO webapp_domains (domain, webapp_id, added) VALUES (:domain, :webapp_id, CURDATE())");
  
  $adddomainstmt->bindParam(':domain', $domainname);
  $adddomainstmt->bindParam(':webapp_id', $webappid);
  
  $adddomainstmt->execute();
  header("Location: /Projects/Work/frameworks/webapp_details.php?id=$webappid");
 
?>