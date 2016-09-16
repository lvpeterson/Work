  <div class="row">
    <div class="col-lg-12">
      <h2> Test Authentication </h2><hr>   
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-edit fa-fw"></i> Understand the Mechanism
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <div class="form-group"><label>Authentication Technologies:</label></div>    
	      <input type="checkbox" name="forms"> Forms
	      <input type="checkbox" name="certs"> Certs
	      <input type="checkbox" name="multifactor"> Multi-Factor
	      
	      <p> table to create lists of all authentication-related functionality (including login, registration, account recovery, and so on) </p>

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
	  <i class="fa fa-edit fa-fw"></i> Test Password Quality
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <div class="form-group"><label>Password Restrictions:</label><input type="text" name="passwordrestrictions" placeholder="Please enter password restrictions" class="form-control"></div>    
	      <input type="checkbox" name="passrestenforce"> Password Restrictions Enforced
	      <input type="checkbox" name="incompletetest" style="margin-left: 10px;"> Incompllete Validation of Credentials
	      <p> Maybe some kind of mini-app that helps build password lists out of the password restrictions </p>

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
	  <i class="fa fa-edit fa-fw"></i> Test for Username Enumeration
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> Table where every location a username is submitted, including via an on-screen input field, a hidden form field, or a cookie. Common locs are primary login, self-registration, pass change, logout, and account recov </p>
	      <p> For each site submit 2 requests, one with a valid and one with an invalid username and note the differences </p>
	      <p> Table where you can add enumerated usernames </p>
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
	  <i class="fa fa-edit fa-fw"></i> Test Resilience to Password Guessing
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <p> Table where every location a credentials are submitted, main locs are primary login and pass change </p>
	      <p> at each location, using an account that you control, manually send severalk requests contianing the valid username but other invalid creds. DO this multiple times and if you havent received an issue about lockout, try the valid ones. If it lets you in lockout is probably not implemented </p>
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
	  <i class="fa fa-edit fa-fw"></i> Test Any Account Recovery Function
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-10">
	      <input type="checkbox" name="forgotpassacnt"> Forgot Your Password/Account Functionality Exists
	      <input type="checkbox" name="walkthroughrecov" style="margin-left: 10px;"> Walkthrough the Account Recovery Process
	      <p> Help function to go through the actual steps </p>
	    
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
      <h2> Test Session Management </h2><hr>   
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-12">
      <h2> Test Access Controls </h2><hr>   
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->