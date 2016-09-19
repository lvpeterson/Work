<?php 

  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $report = $_POST['niktoReport'];
  $formatted = nl2br($report);
  $webappid = whitelist($_GET['id']);
  
  $lines = explode("\n", $report);
  $ipaddr = "";
  $hostname = "";
  $port = "";
  foreach ($lines as $line){
    // Get IP/Hostname/Port
    if(preg_match('/Target IP:\s+((\d+\.*)+)/', $line, $IPmatch)){
      $ipaddr = $IPmatch[1];
      continue;
    }
    if(preg_match('/Target Hostname:\s+(.*)/', $line, $hostmatch)){
      $hostname = $hostmatch[1];
      continue;
    }
    if(preg_match('/Target Port:\s+(\d+)/', $line, $portmatch)){
      $port = $portmatch[1];
      break;
    }
  }

  $addniktoreport = $dbh->prepare("INSERT INTO nikto_reports (ipaddr, hostname, port, report, webapp_id) VALUES (:ipaddr, :hostname, :port, :report, :webapp_id)");
  $addniktoreport->bindParam(':ipaddr', $ipaddr);
  $addniktoreport->bindParam(':hostname', $hostname);
  $addniktoreport->bindParam(':port', $port);
  $addniktoreport->bindParam(':report', $formatted);
  $addniktoreport->bindParam(':webapp_id', $webappid);

  $addniktoreport->execute();

  header("Location: /Projects/Work/frameworks/webapp_details.php?id=$webappid");
 
?>