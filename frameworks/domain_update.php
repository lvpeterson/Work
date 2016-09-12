<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $webapp_id = intval(whitelist($_GET['webapp']));
  $domain_id = intval(whitelist($_GET['id']));
  $domain = whitelist($_POST['domain']);
    
  $updatewebappstmt = $dbh->prepare("UPDATE webapp_domains set domain = :domain WHERE id = :domain_id");
  
  $updatewebappstmt->bindParam(':domain', $domain);
  $updatewebappstmt->bindParam(':domain_id', $domain_id);
  
  $updatewebappstmt->execute();
  
  header("Location: /Projects/Work/frameworks/webapp_details.php?id=$webapp_id");
 
 ?>
