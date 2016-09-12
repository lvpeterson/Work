<?php 
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
?>

        <!-- Page Content -->
        <div id="page-wrapper">
	  <div class="row">
	      <div class="col-lg-12">
		<h2>Web App Framework</h2>
		  <ol class="breadcrumb">
		    <li>
		      <a href="/Projects/Work/index.html">Home</a>
		    </li>
		    <li class="active">
		     <strong>Web App Framework</strong>
		    </li>
		  </ol>
	      </div>
	      <!-- /.col-lg-12 -->
	    </div>
	    <!-- /.row -->
            
                <div class="row">
                <div class="col-lg-12">
		  
		  <button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 10px;" data-toggle="modal" data-target="#testModal"> <i class="fa fa-plus"></i> New Test</button> 
		    <div class="modal inmodal" id="testModal" tabindex="-1" role="dialog" aria-hidden="true">
		      <div class="modal-dialog">
			<div class="modal-content animated bounceInRight">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			    <h4 class="modal-title">New Test</h4>
			  </div>
			  <form class="m-t" role="form" method="post" action="webapp_submit.php">
			    <div class="modal-body">
			      <div class="form-group"><label>Test Name:</label> <input type="text" name="name" placeholder="Enter project name" class="form-control"></div>   
			      <div class="form-group"><label>Description:</label> <input type="text" name="description" placeholder="Enter project description" class="form-control"></div>
			      <div class="form-group"><label>Asignee:</label> <input type="text" name="asignee" value ="Logan" placeholder="Enter task asignee" class="form-control"></div> 
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			      <button type="submit" class="btn btn-primary">Submit</button>
			    </div>
			  </form>    
			</div>
		      </div>
		    </div>
                
                
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                  <thead>
                                    <tr>
                                        <th>Tests</th>
                                        <th>Asignee</th>
                                        <th>Description</th>
                                        <th>% Done</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
				  <?php 
				    $webapps = get_webapptests();
				    foreach ($webapps as $webapp){
				      $webappid = $webapp['id'];
				      $webappurl = "webapp_details.php?id=" . $webappid;
				  ?> 
					<tr>
					  <!-- APP TITLE -->
					  <td class="app-title" align="center">
					     <a href="<?php echo $webappurl; ?>"><?php echo $webapp['testname']; ?></a>
					  </td>
					 
					  <!-- APP ASIGNEE -->
					  <td class="project-asignee" align="center">
					    <?php echo $webapp['asignee']; ?>
					  </td>
					  <!-- APP DESCRIPTION -->
					  <td class="project-description" align="center">
					    <?php echo $webapp['description']; ?>
					  </td>
					  
					  <!-- APP COMPLETION % -->
					  <td align="center"> test progress </td>
					  <!--<td class="project-completion">
					      <?php 
						//$progress = get_project_progress($project['id']); 
						//$progress = $progress * 100;
					      ?>
					      <small>Completion with: <?php //echo round($progress); ?>%</small>
					  </td>-->
					  <!-- APP CREATED -->
					  <td class="project-creation" align="center">
					    <?php echo $webapp['created']; ?>
					  </td>
					  
					  <!-- ACTIONS -->
					  <td class="actions">
					    <button type="button" class="btn btn-white btn-sm" data-toggle="modal" data-target="#editModal<?php echo $webapp['id']; ?>"><i class="fa fa-pencil"></i> Edit </button> 
					      <div class="modal inmodal" id="editModal<?php echo $webapp['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
						  <div class="modal-content animated bounceInRight">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						      <h4 class="modal-title">Edit Task</h4>
						    </div>
						    <form class="m-t" role="form" method="post" action="updatewebapp_submit.php?project=<?php echo $webapp['id'];?>">
						      <div class="modal-body">
							<div class="form-group"><label>Title:</label> <input type="text" name="name" value="<?php echo $webapp['testname']; ?>" class="form-control"></div>
							<div class="form-group"><label>Description:</label> <input type="text" name="description" value="<?php echo $webapp['description']; ?>" class="form-control"></div>  
							<div class="form-group"><label>Asignee:</label> <input type="text" name="asignee" value="<?php echo $webapp['asignee']; ?>" class="form-control"></div>
						      </div>

							  <div class="modal-footer">
							    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Submit</button>
							  </div>
						      </form>
						    </div>
						  </div>
						</div>
						
						<button type="submit" style="border: none; background: none;" class="deletewebapptest" onclick="deletewebapptest(<?php echo $webapp['id']; ?>)"><i class="fa fa-trash"></i></button>
					  
					  
					  </td>

                                        </tr>
				  <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

        
      <script type="text/javascript">
      
	function deletewebapptest(webid){
	  $.ajax({
	      type: "POST",
	      dataType: "json",
	      url: "/Projects/Work/frameworks/deletewebapptest_submit.php",
	      data: {
		  id: webid
	      },
	  });
	  location.reload();
	}
      </script>

        
<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
