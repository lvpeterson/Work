  <div class="row">
    <div class="col-lg-12">
      <h2> Test Client-Side Controls </h2><hr>   
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-edit fa-fw"></i> Transmission of Data Via the Client
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> Table that can be added to containing all instances within the app where hidden form fields, cookies, and URL params are apparently being used to transmit data via the client and determine their purpose </p>
	      <p> | URL | Param | Purpose | checkbox for whether the app processes arbitrary values submitted </p>
	  <p> Note: if URL uses ViewState for ASP.NET see if it can be modified within Burp Suite </p>
	      
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
	  <i class="fa fa-edit fa-fw"></i> Client-Side Controls Over User Input
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> Table for cases where client-side controls such as length limits and JavaScript checks are used to validate user input before its submitted & checkbox for whether or not it was tested for input that would be blocked </p>
	     <p> look for HTML form that has <\input disabled="true"> and play with it to see if it has an effect </p>      
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
	  <i class="fa fa-edit fa-fw"></i> Browser Extension Components
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> May do this later - this requires a lot of work and decompiling/attaching debuggers etc. </p>    
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
      <h2> Test Logic Flaws </h2><hr>   
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->