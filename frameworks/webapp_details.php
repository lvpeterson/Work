<?php 
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
  
  $webappid = whitelist($_GET['id']);
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

        </div>
        <!-- /#page-wrapper -->

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
