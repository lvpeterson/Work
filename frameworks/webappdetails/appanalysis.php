  <div class="row" style="margin-top: 10px;">
    <div class="col-lg-12">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-gears fa-fw"></i> Identify Functionality
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <div class="form-group"><label>Core Functionality:</label> <input type="text" name="corefunc" placeholder="Enter application core functionality" class="form-control"></div>  
	      <div class="form-group"><label>Authentication Mechanism:</label> <input type="text" name="authmech" placeholder="Enter authentication mechanism" class="form-control"></div> 
	      <div class="form-group"><label>Session Management:</label> <input type="text" name="sessionmgmt" placeholder="Enter session management functionality" class="form-control"></div> 
	      <div class="form-group"><label>Access Control:</label> <input type="text" name="accesscontrol" placeholder="Enter access control functionality" class="form-control"></div> 
	      <p> Table with ability to add sites where access control happens - user registration - login portals - account recovery - etc </p>
	    </div>
	    <!-- /.col-lg-10 -->
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-edit fa-fw"></i> Identify Data Entry Points
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> Table with ability to add URL's that exist for introducing user input into the application's processing, including URLs, query string parameters, POST data, cookies, and other HTTP headers processed
	          by the application </p>
	    </div>
	    <!-- /.col-lg-10 -->
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-code-fork fa-fw"></i> Identify the Technologies Used
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <input type="checkbox" name="nikto" value="completed"> HTTPrint Tool Ran
		<p> Create either file upload or paste box to upload the results of the tool </p>
	      <div class="form-group"><label>Technologies:</label> <p> New input box generated after each item is added to keep track of all technologies implemented on client side </p> </div> 
	    </div>
	    <!-- /.col-lg-10 -->
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-map-o fa-fw"></i> Map the Attack Surface
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> ascertain the likely internal structure and functionality of the server-side app and the mechanisms it uses behind the scenes to deliver the behavior that is visible from the client perspective
		for example, a function to retrieve customer orders is likely to be interacting with a database  - input box with a drop down describing common functionality and link location</p>
	      <div class="form-group"><label>Common Vulnerabilities:</label> <p> Based on input from above generate list of common vulnerabilities associated with each functionality found </p> </div> 
	      <div class="form-group"><label>Plan of Attack:</label> <p> use information from step 2 to drive the assessment plan of attack </p> </div> 
	    </div>
	    <!-- /.col-lg-10 -->
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->