<?php

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");

  $status = whitelist($_POST['status']);
  $section = whitelist($_POST['box']);
  $tab = whitelist($_POST['tab']);
  $webappid = whitelist($_POST['id']);
  
  
  switch ($tab){
  
    case "mapping":
      switch ($section){
	case "EVCstatus":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_status SET evcstatus = :evcstatus WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':evcstatus', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "CPRstatus":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_status SET cprstatus = :cprstatus WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':cprstatus', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "DHCstatus":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_status SET dhcstatus = :dhcstatus WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':dhcstatus', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "DDCstatus":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_status SET ddcstatus = :ddcstatus WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':ddcstatus', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
	case "EISFstatus":
	  $updatemappingstmt = $dbh->prepare("UPDATE mappingtab_status SET eisfstatus = :eisfstatus WHERE webapp_id = :webappid");
	  $updatemappingstmt->bindParam(':eisfstatus', $status);
	  $updatemappingstmt->bindParam(':webappid', $webappid);
	  $updatemappingstmt->execute();
	  break;
      }
      break;
      
   }
?>