<?php 
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
  $projects = get_projects();
  
?>
        <!-- Page Content -->
        <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
		      <h2>Tasklist</h2>
		      <ol class="breadcrumb">
			<li>
			  <a href="/Projects/Work/index.html">Home</a>
			</li>
			<li class="active">
			  <strong>Tasklist</strong>
			</li>
		      </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                

		<div class="row">
		  <div class="col-lg-12">
		    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#taskModal"> <i class="fa fa-plus"></i> Add task</button> 
		    <div class="modal inmodal" id="taskModal" tabindex="-1" role="dialog" aria-hidden="true">
		      <div class="modal-dialog">
			<div class="modal-content animated bounceInRight">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			    <h4 class="modal-title">Add Task</h4>
			  </div>
			  <form class="m-t" role="form" method="post" action="tasklist_submit.php">
			    <div class="modal-body">
			      <div class="form-group"><label>Task:</label> <input type="text" name="name" placeholder="Enter task description" class="form-control"></div>
			      <div class="form-group"><label>Projects:</label>
				<select class="form-control m-b" name="project">
				  <?php 
				    foreach ($projects as $project){
				  ?>
				  <option value="<?php echo $project['id']; ?>"> <?php echo $project['name']; ?> </option>
				  <?php } ?>
				</select>
			      </div>	    
					
			      <div class="form-group">
				<label>Status:</label>
				<select class="form-control m-b" name="status">
				  <option value="Not Started"> Not Started </option>
				  <option value="In Progress"> In Progress </option>
				  <option value="Complete"> Complete </option>
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

			      <div class="form-group"><label>Asignee:</label> <input type="text" name="asignee" placeholder="Enter task asignee" class="form-control"></div>
			      
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
                                        <th>Task</th>
                                        <th>Project Association</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                        <th>Deadline</th>
                                        <th>Asignee</th>
                                        <th>Notes</th>
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <tbody>
				   <?php
				      $tasks = get_tasklist();
				      foreach ($tasks as $task){
				    ?>
					<tr>
					  <!-- TASK NAME -->
					  <td class="task-title" align="center">
					      <?php echo $task['name']; ?>
					  </td>
					  <td class="task-project" align="center">
					    <?php echo get_project_name($task['project_id']); ?>
					  </td>
					  <!-- TASK STATUS Complete/in progress/notstarted-->
					  <td class="task-status" align="center">
					      <?php echo $task['status']; ?>	
					  </td>
					  <!-- TASK PRIORITY -->
					  <td class="task-priority" align="center">
					      <?php echo $task['priority']; ?>
					  </td>
					  <!-- TASK DEADLINE -->
					  <td class="task-deadline" align="center">
					    <?php echo $task['deadline']; ?>
					  </td>
					  <!-- TASK ASIGNEE -->
					  <td class="task-asignee" align="center">
					    <?php echo $task['asignee']; ?>
					  </td>

					  <!-- TASK NOTES -->
					  <td class="task-notes" align="center">
					    <?php echo $task['notes']; ?>
					  </td>

					  <!-- TASK CREATED -->
					  <td class="task-creation" align="center">
					    <?php echo $task['timestamp']; ?>
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
	      <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        
        
        
      <script type="text/javascript">
	$(function () {
	    $('#datetimepicker1').datetimepicker();
	});
      </script>

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
