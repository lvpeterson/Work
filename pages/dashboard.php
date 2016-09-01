<?php
  include ("/var/www/html/Projects/Work/includes/lib/functions.php");
  include ("/var/www/html/Projects/Work/includes/header.php"); 
  $tasks = get_tasklist();
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
		    <h2>Dashboard</h2>
		      <ol class="breadcrumb">
			<li>
			  <a href="/Projects/Work/index.html">Home</a>
			</li>
			<li class="active">
			  <strong>Dashboard</strong>
			</li>
		      </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>  
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
 
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Tasks This Week
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
				<?php
				  $nextweek = get_current_week();
				  foreach($nextweek as $day){
				    foreach($tasks as $task){
				      if ($task['deadline'] == $day){
				?>
					<li>
					  <a href="#" class="list-group-item">
					    <i class="fa fa-comment fa-fw"></i> <?php echo $task['name']; ?>
					    <span class="pull-right text-muted small">
					    
					    <button type="button" class="btn btn-sm" style="border: none; background: none;" data-toggle="modal" data-target="#noteModal<?php echo $task['id']; ?>"> <i class="fa fa-plus"></i></button> 
					    <div class="modal inmodal" id="noteModal<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
					      <div class="modal-dialog">
						<div class="modal-content animated bounceInRight">
						  <div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						    <h4 class="modal-title">Add Note</h4>
						  </div>
						  <form class="m-t" role="form" method="post" action="/Projects/Work/management/addnote_submit.php?task=<?php echo $task['id'];?>&project=<?php echo $task['project_id']; ?>&dash=1">
						    <div class="modal-body">
						      <div class="form-group"><label>Note:</label> <input type="text" name="note" placeholder="Enter note" class="form-control"></div>
						    </div>
						    <div class="modal-footer">
						      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
						      <button type="submit" class="btn btn-primary">Submit</button>
						    </div>
						    
						  </form>    
						</div>
					      </div>

					    </div>
					    <em><?php echo $task['deadline'];?></em>
					    </span>
					  </a>
					  
					  <?php 
					    get_notes($task['id']);
					    foreach ($_SESSION['notes'] as $note){
					  ?>
					    <ul>
					      <li>
						<a href='#'>
						  <i class="fa fa-comment fa-fw"></i> <?php echo $note['note']; ?>
						</a>
					      </li>
					    </ul>
					  <?php
					    }
					  ?>
					  
					</li>
					
				<?php
				      }
				    }
				  }
				?>
                            </div>
                            <!-- /.list-group -->
                            <a href="/Projects/Work/management/tasklist.php" class="btn btn-default btn-block">View All Tasks</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Next Week's Lineup
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                              <?php
				  $thisweek = get_next_week();
				  foreach($thisweek as $day){
				    foreach($tasks as $task){
				      if ($task['deadline'] == $day){
				?>
					<a href="#" class="list-group-item">
					  <i class="fa fa-comment fa-fw"></i> <?php echo $task['name']; ?>
					  <span class="pull-right text-muted small">
					  <button type="button" class="btn btn-sm" style="border: none; background: none;" data-toggle="modal" data-target="#noteModal<?php echo $task['id']; ?>"> <i class="fa fa-plus"></i></button> 
					  <div class="modal inmodal" id="noteModal<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog">
					      <div class="modal-content animated bounceInRight">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						  <h4 class="modal-title">Add Note</h4>
						</div>
						<form class="m-t" role="form" method="post" action="/Projects/Work/management/addnote_submit.php?task=<?php echo $task['id'];?>&project=<?php echo $task['project_id']; ?>&dash=1">
						  <div class="modal-body">
						    <div class="form-group"><label>Note:</label> <input type="text" name="note" placeholder="Enter note" class="form-control"></div>
						  </div>
						  <div class="modal-footer">
						    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
						    <button type="submit" class="btn btn-primary">Submit</button>
						  </div>
						  
						</form>    
					      </div>
					    </div>

					  </div>
					  <em><?php echo $task['deadline'];?></em>
					  </span>
					</a>
				<?php
				      }
				    }
				  }
				?>
                            </div>
                            <!-- /.list-group -->
                            <a href="/Projects/Work/management/tasklist.php" class="btn btn-default btn-block">View All Tasks</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<?php 
  include "/var/www/html/Projects/Work/includes/footer.php"; 
?>