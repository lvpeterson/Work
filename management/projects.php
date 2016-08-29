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
					      <a href="<?php echo $projurl; ?>"><?php echo $project['name']; ?></a>
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
					    Created <?php echo $project['timestamp']; ?>
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

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>
