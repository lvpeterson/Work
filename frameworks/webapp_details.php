<?php 
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
  
  $webappid = whitelist($_GET['id']);
  $_SESSION['id'] = $webappid;
  $webappdetails = get_webapp_details($webappid);
  get_help();
?>


        <!-- Page Content -->
        <div id="page-wrapper">
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
            
	    <div class="row">
	      <div class="col-lg-5">
	      
	      
		<button type="button" style="margin-bottom: 10px;"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#domainModal"> <i class="fa fa-plus"></i> Add Domain</button> 
		<div class="modal fade" id="domainModal" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">New Domain</h4>
		      </div>
		      <form class="m-t" role="form" method="post" action="newdomain_submit.php?id=<?php echo $webappid; ?>">
			<div class="modal-body">
			  <div class="form-group"><label>Domain Name:</label> <input type="text" name="domain" placeholder="Enter domain name" class="form-control"></div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		      </form>    
		    </div>
		  </div>
		</div>
		
		<div class="table-responsive">
		
		    <table class="table table-striped table-bordered table-hover">
		      <thead>
			<tr>
			    <th>Domains</th>
			    <th>Added</th>
			    <th>Actions</th>
			</tr>
		    </thead>
		    <tbody>
		      <?php 
			$domains = get_webapp_domains($webappid);
			foreach ($domains as $domain){
		      ?> 
			    <tr>
			      <!-- DOMAIN NAME -->
			      <td class="domain-name" >
				  <a href="<?php echo $domain['domain']; ?>"><?php echo $domain['domain']; ?></a>
			      </td>

			      <!-- DOMAIN ADDED DATE -->
			      <td class="domain-added" >
				<?php echo $domain['added']; ?>
			      </td>
			      
			      <!-- ACTIONS -->
			      <td class="actions">
				<button type="button" class="btn btn-white btn-sm" data-toggle="modal" data-target="#editModal<?php echo $domain['id']; ?>"><i class="fa fa-pencil"></i> Edit </button> 
				  <div class="modal fade" id="editModal<?php echo $domain['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					  <h4 class="modal-title">Edit Domain</h4>
					</div>
					<form class="m-t" role="form" method="post" action="domain_update.php?id=<?php echo $domain['id'];?>&webapp=<?php echo $domain['webapp_id']; ?>">
					  <div class="modal-body">
					    <div class="form-group"><label>Domain:</label> <input type="text" name="domain" value="<?php echo $domain['domain']; ?>" class="form-control"></div>

					  </div>

					      <div class="modal-footer">
						<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					      </div>
					  </form>
					</div>
				      </div>
				    </div>
				    
<!-- 				    <button type="submit" style="border: none; background: none;" class="deletewebapptest" onclick="deletewebapptest(<?php echo $webapp['id']; ?>)"><i class="fa fa-trash"></i></button> -->
			      
			      </td>

			      </tr>
			<?php } ?>
		      </tbody>
		  </table>
		<!-- /.table-responsive -->
		</div>
		<!-- /.table-responsive -->
	      </div>
	      <!-- /.col-lg-5 -->
	      <div class="col-lg-5" align="center">
		<button type="button" class="btn btn-primary btn-sm" style="margin-top: 75px;"><i class="fa fa-bug"></i> Run Bug Bounty Report </button> 
		<button type="button" class="btn btn-primary btn-sm" style="margin-left: 10px; margin-top: 75px;" ><i class="fa fa-folder-open-o"></i> Run Full Report </button> 
	      
	      </div>
	    </div>
	    <!-- /.row -->
	    
	  <div class="row">
	    <div class="col-lg-12">
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
		    <li class=""><a href="#tab-9" data-toggle="tab">Findings</a></li>
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
	      <div class="tab-pane" id="tab-9">
		<?php include "webappdetails/findings.php"?>
	      </div>
	  </div>
	</div>
	<!-- ./col-lg-12 -->
	</div>
	<!-- ./row -->
      </div>
      <!-- /#page-wrapper -->
      
      <script>
	window.onload = function() {closebtn
	  document.getElementById("LearnMoreBtn").onclick = function(){
	    var overlay = document.getElementById("overlay");
	    var popup = document.getElementById("popup");
	    overlay.style.display = "block";
	    popup.style.display = "block";
	  };
      
	  document.getElementById("CloseBtn").onclick = function(){
	    var overlay = document.getElementById("overlay");
	    var popup = document.getElementById("popup");
	    overlay.style.display = "none";
	    popup.style.display = "none";      
	  }
	};
	
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()

      </script>

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
