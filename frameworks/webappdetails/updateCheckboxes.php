<?php

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");

  $status = whitelist($_POST['status']);
  $checkbox = whitelist($_POST['box']);
  $tab = whitelist($_POST['tab']);
  $webappid = whitelist($_POST['id']);
  
  
  switch ($tab){
  
    case "mapping":
      switch ($checkbox){
	case "jscript":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET jscript = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "cookies":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET cookies = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "sitemap_review":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET sitemap_review = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "active_spider":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET active_spider = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "archive_site":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET archive_site = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "public_emails":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET public_emails = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "wsdl_files":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET wsdl_files = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "non_existent":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET non_existent = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "naming_conventions":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET naming_conventions = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "hidden_server_side":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET hidden_server_side = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "automated_scanning":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET automated_scanning = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "nikto_ran":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET nikto_ran = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "request_server_root":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET request_server_root = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "request_server_root_ua":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_checkboxes SET request_server_root_ua = :status WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':status', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
      }
      break;
      
   }
?>