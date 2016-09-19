<?php 
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
  
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h2>Projects</h2>
		    <ol class="breadcrumb">
		      <li>
			<a href="/Projects/Work/index.html">Home</a>
		      </li>
		      <li class="active">
			<strong>Projects</strong>
		      </li>
		    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
               <div class="row">
                <div class="col-lg-12">            

		  <button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 10px;" data-toggle="modal" data-target="#projectModal"> <i class="fa fa-plus"></i> Add Project</button> 
		    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-hidden="true">
		      <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			    <h4 class="modal-title">Add Project</h4>
			  </div>
			  <form class="m-t" role="form" method="post" action="project_submit.php">
			    <div class="modal-body">
			      <div class="form-group"><label>Project:</label> <input type="text" name="name" placeholder="Enter project name" class="form-control"></div>    
					
			      <div class="form-group">
				<label>Status:</label>
				<select class="form-control m-b" name="status">
				  <option value="1"> Active </option>
				  <option value="0"> Inactive </option>
				</select>
			      </div>
			      
			      <div class="form-group">
				<label>Priority:</label>
				<select class="form-control" name="priority">
				  <option value="Low"> Low </option>
				  <option value="Medium"> Medium </option>
				  <option value="High"> High </option>
				</select>
			      </div>
			      
			      <div class="form-group">
				<label>Deadline:</label>
				<input type='date' name="deadline" class="form-control" />
			      </div>

			      <div class="form-group"><label>Asignee:</label> <input type="text" name="asignee" value ="Logan" placeholder="Enter task asignee" class="form-control"></div>
			      <div class="form-group"><label>Description:</label> <input type="text" name="description" placeholder="Enter project description" class="form-control"></div>
			      
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
                                        <th>Projects</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                        <th>Deadline</th>
                                        <th>Asignee</th>
                                        <th>Description</th>
                                        <th>Deliverable</th>
                                        <th>% Done</th>
                                        <th>Created</th>
                                        <th>Last Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
				  <?php 
				    $projects = get_projects();
				    foreach ($projects as $project){
				      $projectid = $project['id'];
				      $projurl = "project_details.php?id=" . $projectid;
				  ?> 
					<tr>
					  <!-- PROJECT TITLE -->
					  <td class="project-title" align="center">
					      <?php echo $project['name']; ?>
					  </td>
					  <!-- PROJECT STATUS -->
					  <td class="project-status" align="center">
					      <?php 
						if ($project['status']){ ?>
						  <span class="label label-primary">Active</span>
						<?php } else { ?>
						  <span class="label label-default">Inactive</span>
						<?php } ?>	
					  </td>
					  <!-- PROJECT PRIORITY -->
					  <td class="project-priority" align="center">
					      <?php echo $project['priority']; ?>
					  </td>
					  <!-- PROJECT DEADLINE -->
					  <td class="project-deadline" align="center">
					    <?php echo $project['deadline']; ?>
					  </td>
					  <!-- PROJECT ASIGNEE -->
					  <td class="project-asignee" align="center">
					    <?php echo $project['asignee']; ?>
					  </td>
					  <!-- PROJECT DESCRIPTION -->
					  <td class="project-description" align="center">
					    <?php echo $project['description']; ?>
					  </td>
					  <!-- PROJECT DELIVERABLE -->
					  <td class="project-deliverable" align="center">
					    <?php echo $project['deliverable']; ?>
					  </td>
					  <!-- PROJECT COMPLETION % -->
					  <td align="center"> test progress </td>
					  <!--<td class="project-completion">
					      <?php 
						//$progress = get_project_progress($project['id']); 
						//$progress = $progress * 100;
					      ?>
					      <small>Completion with: <?php //echo round($progress); ?>%</small>
					  </td>-->
					  <!-- PROJECT CREATED -->
					  <td class="project-creation" align="center">
					    <?php echo $project['created']; ?>
					  </td>
					  
					  <!-- PROJECT UPDATED -->
					  <td class="project-creation" align="center">
					    <?php echo $project['timestamp']; ?>
					  </td>
					  
					  <!-- ACTIONS -->
					  <td class="actions">
					    <button type="button" class="btn btn-white btn-sm" data-toggle="modal" data-target="#editModal<?php echo $project['id']; ?>"><i class="fa fa-pencil"></i> Edit </button> 
					      <div class="modal fade" id="editModal<?php echo $project['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						      <h4 class="modal-title">Edit Task</h4>
						    </div>
						    <form class="m-t" role="form" method="post" action="updateproject_submit.php?project=<?php echo $project['id'];?>">
						      <div class="modal-body">
							<div class="form-group"><label>Title:</label> <input type="text" name="name" value="<?php echo $project['name']; ?>" class="form-control"></div>
							
							<div class="form-group">
							  <label>Status:</label>
							  <select class="form-control m-b" name="status">
							    <option value="1" <?php if ($project['status'] == "1"){ echo("selected"); } ?>> Active </option>
							    <option value="0" <?php if ($project['status'] == "0"){ echo("selected"); } ?>> Inactive </option>
							  </select>
							</div>
							
							<div class="form-group">
							  <label>Priority:</label>
							  <select class="form-control" name="priority">
							    <option value="Low" <?php if ($project['priority'] == "Low"){ echo("selected"); } ?>> Low </option>
							    <option value="Medium" <?php if ($project['priority'] == "Medium"){ echo("selected"); } ?>> Medium </option>
							    <option value="High" <?php if ($project['priority'] == "High"){ echo("selected"); } ?>> High </option>
							  </select>
							</div>
							
							<div class="form-group">
							  <label>Deadline:</label>
							  <input type='date' name="deadline" class="form-control" value="<?php echo $project['deadline']; ?> />
							</div>
							  
							<div class="form-group"><label>Asignee:</label> <input type="text" name="asignee" value="<?php echo $project['asignee']; ?>" class="form-control"></div>
							<div class="form-group"><label>Description:</label> <input type="text" name="description" value="<?php echo $project['description']; ?>" class="form-control"></div>
						      </div>

							  <div class="modal-footer">
							    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Submit</button>
							  </div>
						      </form>
						    </div>
						  </div>
						</div>
						
						<button type="submit" style="border: none; background: none;" class="deleteproject" onclick="deleteproject(<?php echo $project['id']; ?>)"><i class="fa fa-trash"></i></button>
					  
					  
					  </td>

                                        </tr>
				  <?php } ?>
                                </tbody>
                            </table>
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
      
	function deleteproject(projid){
	  $.ajax({
	      type: "POST",
	      dataType: "json",
	      url: "/Projects/Work/management/deleteproject_submit.php",
	      data: {
		  id: projid
	      },
	  });
	  location.reload();
	}
      </script>

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
