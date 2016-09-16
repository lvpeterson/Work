<?php
  
  include("/var/www/html/Projects/Work/includes/lib/functions.php");
  
  $helpInfo = file('/var/www/html/Projects/Work/finalDraft.csv');
  $category = "";
  foreach ($helpInfo as $helpInfoLine) {
    $lineSplit = explode(",", $helpInfoLine); // 0 = step num 1 = data
    if (substr_count($lineSplit[0],'.') == 1){
      $category = trim($lineSplit[1]);
      continue;
    }
//     echo $category . ": " . $lineSplit[0] . " : " . trim($lineSplit[1]) . "\n";
    
    
    $importstmt = $dbh->prepare("INSERT INTO help_info (stepnum, data, category) VALUES (:stepnum, :data, :category)");
    $importstmt->bindParam(':stepnum', $lineSplit[0]);
    $importstmt->bindParam(':category', $category);
    $importstmt->bindParam(':data', trim($lineSplit[1]));
    $importstmt->execute();

  }
  
?>