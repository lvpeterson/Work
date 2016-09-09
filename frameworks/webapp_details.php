<?php 
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
  
  $webappid = whitelist($_GET['id']);
  $_SESSION['id'] = $webappid;
  $webappdetails = get_webapp_details($webappid);
?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
		      <h2><?php echo $webappdetails['testname']; ?></h2>
			<ol class="breadcrumb">
			  <li>
			    <a href="/Projects/Work/index.html">Home</a>
			  </li>
			  <li>
			    <a href="/Projects/Work/frameworks/webapp.php">Web App Framework</a>
			  </li>
			  <li class="active">
			    <strong><?php echo $webappdetails['testname']; ?></strong>
			  </li>
			</ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
	      <div class="panel-options">
		<ul class="nav nav-tabs">
		    <li class="active"><a href="#tab-1" data-toggle="tab">Mapping the App</a></li>
		    <li class=""><a href="#tab-2" data-toggle="tab">Analyzing the App</a></li>
		    <li class=""><a href="#tab-3" data-toggle="tab">Application Logic Tests</a></li>
		    <li class=""><a href="#tab-4" data-toggle="tab">Access Handling Tests</a></li>
		    <li class=""><a href="#tab-5" data-toggle="tab">Input Handling Tests</a></li>
		    <li class=""><a href="#tab-6" data-toggle="tab">Application Hosting Tests</a></li>
		    <li class=""><a href="#tab-7" data-toggle="tab">Miscellaneous Checks</a></li>
		    <li class=""><a href="#tab-8" data-toggle="tab">Information Leakage</a></li>
		</ul>
	      </div>
	      
	      <div class="tab-content">
		<div class="tab-pane active" id="tab-1">
		  <?php include "webappdetails/appmapping.php";?>
		</div>
		<div class="tab-pane" id="tab-2">
		  <?php include "webappdetails/appanalysis.php"?>
		</div>
		<div class="tab-pane" id="tab-3">
		  <?php include "webappdetails/applogictests.php"?>
		</div>
		<div class="tab-pane" id="tab-4">
		  <?php include "webappdetails/appaccesshandling.php"?>
		</div>
		<div class="tab-pane" id="tab-5">
		  <?php include "webappdetails/appinputhandling.php"?>
		</div>
		<div class="tab-pane" id="tab-6">
		  <?php include "webappdetails/apphosting.php"?>
		</div>
		<div class="tab-pane" id="tab-7">
		  <?php include "webappdetails/appmisc.php"?>
		</div>
		<div class="tab-pane" id="tab-8">
		  <?php include "webappdetails/appinfoleak.php"?>
		</div>
            </div>
        </div>
        <!-- /#page-wrapper -->

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
