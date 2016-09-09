  <?php 
    echo $webappid;
  ?>
  
  <div class="row">
  <div class="col-lg-12">
    
    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#testModal"> <i class="fa fa-plus"></i> New Test</button> 
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
     
     </div>
    </div>