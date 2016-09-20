  <div class="row" style="margin-top: 10px;">
    <div class="col-lg-4">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-search fa-fw"></i> Explore Visible Content
	      <div class="pull-right">
	      <!-- Help Button -->
		<button type="button" style="border: none; background: none;" data-toggle="modal" data-target="#helpModalEVC"><i class="fa fa-question"></i></button> 
		  <div class="modal fade" id="helpModalEVC" tabindex="-1" role="dialog" aria-hidden="true">
		    <div class="modal-dialog modal-lg">
		      <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			  <h4 class="modal-title">Help: Explore Visible Content</h4>
			</div>
			<div class="modal-body">
			    <ol>
			      <?php 
				foreach ($_SESSION['help_info'] as $note){
				  if ($note['category'] == "Explore Visible Content"){
			      ?>
				    <li><?php echo $note['data']?></li>
			      <?php
				  }
				}
			      ?>
			    </ol>

			  </div>

			      <div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			      </div>
			</div>
		      </div>
		    </div>
		  <!-- Status Dropdown -->
		  <select id="EVCstatus" name="EVCstatus" onchange="updateStatus(this.id, maptabname, <?php echo $webappid; ?>)">
 		    <?php  
		      switch ($mapstatus['evcstatus']){
			case "Not Started": ?>
			  <option value="Not Started" selected> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "In Progress": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress" selected> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "Complete": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" selected> Complete </option>
		    <?php break; } ?> 
		  </select>
	      </div>
	  
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	      <ul style="list-style:none">
	      
		<?php if($mapcheckboxes['jscript']){ ?>
		<li><input type="checkbox" id="jscript" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> JavaScript Enabled/Disabled</li>
		<?php }else{?>
		<li><input type="checkbox" id="jscript" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> JavaScript Enabled/Disabled</li>
		<?php } ?>
		
		<?php if($mapcheckboxes['cookies']){ ?>
		<li><input type="checkbox" id="cookies" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Cookies Enabled/Disabled</li>
		<?php }else{?>
		<li><input type="checkbox" id="cookies" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Cookies Enabled/Disabled</li>
		<?php } ?>
		
		<?php if($mapcheckboxes['sitemap_review']){ ?>
		<li><input type="checkbox" id="sitemap_review" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Review Sitemap</li>
		<?php }else{?>
		<li><input type="checkbox" id="sitemap_review" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Review Sitemap</li>
		<?php } ?>
		
		<?php if($mapcheckboxes['active_spider']){ ?>
		<li><input type="checkbox" id="active_spider" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Active Spidering</li>
		<?php }else{?>
		<li><input type="checkbox" id="active_spider" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Active Spidering</li>
		<?php } ?>
	      </ul>
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->

    <div class="col-lg-4">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-google fa-fw"></i> Consult Public Resources
	    <div class="pull-right">
	    <!-- Help Button -->
	      <button type="button" style="border: none; background: none;" data-toggle="modal" data-target="#helpModalCPR"><i class="fa fa-question"></i></button> 
		<div class="modal fade" id="helpModalCPR" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Help: Consult Public Resources</h4>
		      </div>
			<div class="modal-body">
			  <ol>
			    <?php 
			      foreach ($_SESSION['help_info'] as $note){
				if ($note['category'] == "Consult Public Resources"){
			    ?>
				  <li><?php echo $note['data']?></li>
			    <?php
				}
			      }
			    ?>
			  </ol>

			</div>

			    <div class="modal-footer">
			      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			    </div>
		      </div>
		    </div>
		  </div>
	      <!-- Status Dropdown -->
		<select id="CPRstatus" name="CPRstatus" onchange="updateStatus(this.id, maptabname, <?php echo $webappid; ?>)">
 		    <?php  
		      switch ($mapstatus['cprstatus']){
			case "Not Started": ?>
			  <option value="Not Started" selected> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "In Progress": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress" selected> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "Complete": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" selected> Complete </option>
		    <?php break; } ?> 
	      </select>
	    </div>
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <ul style="list-style:none">
	    
	      <?php if($mapcheckboxes['archive_site']){ ?>
	      <li><input type="checkbox" id="archive_site" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Check Archive of Site (Wayback Machine)</li>
	      <?php }else{?>
	      <li><input type="checkbox" id="archive_site" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Check Archive of Site (Wayback Machine)</li>
	      <?php } ?>
	      
	      <?php if($mapcheckboxes['public_emails']){ ?>
	      <li><input type="checkbox" id="public_emails" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Check Public E-mails Found</li>
	      <?php }else{?>
	      <li><input type="checkbox" id="public_emails" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Check Public E-mails Found</li>
	      <?php } ?>
	      
	      <?php if($mapcheckboxes['wsdl_files']){ ?>
	      <li><input type="checkbox" id="wsdl_files" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Review WSDL Files & Generate Function List</li>
	      <?php }else{?>
	      <li><input type="checkbox" id="wsdl_files" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Review WSDL Files & Generate Function List</li>
	      <?php } ?>
	    </ul>
	  </div>
	  <!-- /.row -->
	  
	  
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    
    <div class="col-lg-4">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-google-plus-official fa-fw"></i> Generate Google Hack Queries
	    <div class="pull-right">
	      <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-bug"></i> Generate </button> 
	    </div>
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-12">
	      <a href="https://www.exploit-db.com/google-hacking-database/"> GHDB </a>
	    </div>
	  </div>
	  <!-- /.row -->  
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
    
    
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-snapchat-ghost fa-fw"></i> Discover Hidden Content
	    <div class="pull-right">
	      <!-- Help Button -->
	      <button type="button" style="border: none; background: none;" data-toggle="modal" data-target="#helpModalDHC"><i class="fa fa-question"></i></button> 
		<div class="modal fade" id="helpModalDHC" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Help: Discover Hidden Content</h4>
		      </div>
			<div class="modal-body">
			  <ol>
			    <?php 
			      foreach ($_SESSION['help_info'] as $note){
				if ($note['category'] == "Discover Hidden Content"){
			    ?>
				  <li><?php echo $note['data']?></li>
			    <?php
				}
			      }
			    ?>
			  </ol>

			</div>

			    <div class="modal-footer">
			      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			    </div>
		      </div>
		    </div>
		  </div>
	      <!-- Status Dropdown -->
		<select id="DHCstatus" name="DHCstatus" onchange="updateStatus(this.id, maptabname, <?php echo $webappid; ?>)">
 		    <?php  
		      switch ($mapstatus['dhcstatus']){
			case "Not Started": ?>
			  <option value="Not Started" selected> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "In Progress": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress" selected> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "Complete": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" selected> Complete </option>
		    <?php break; } ?> 
	      </select>
	    </div>
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	      <ul style="list-style:none">
		<?php if($mapcheckboxes['non_existent']){ ?>
		<li><input type="checkbox" id="non_existent" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Confirm How App Handles Non-Existent Items</li>
		<?php }else{?>
		<li><input type="checkbox" id="non_existent" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Confirm How App Handles Non-Existent Items</li>
		<?php } ?>
		
		<?php if($mapcheckboxes['naming_conventions']){ ?>
		<li><input type="checkbox" id="naming_conventions" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Understand Naming Conventions</li>
		<?php }else{?>
		<li><input type="checkbox" id="naming_conventions" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Understand Naming Conventions</li>
		<?php } ?>
		
		<?php if($mapcheckboxes['hidden_server_side']){ ?>
		<li><input type="checkbox" id="hidden_server_side" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Review Code to Find Clues For Hidden Server-Side Content</li>
		<?php }else{?>
		<li><input type="checkbox" id="hidden_server_side" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Review Code to Find Clues For Hidden Server-Side Content</li>
		<?php } ?>
		
		<?php if($mapcheckboxes['automated_scanning']){ ?>
		<li><input type="checkbox" id="automated_scanning" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Automated Scanning For Directories & Files</li>
		<?php }else{?>
		<li><input type="checkbox" id="automated_scanning" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Automated Scanning For Directories & Files</li>
		<?php } ?>
	      </ul>
	  </div>
	  <!-- /.row -->
	  
	  
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-4">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-cog fa-fw"></i> Discover Default Content
	    <div class="pull-right">
	      <!-- Help Button -->
	      <button type="button" style="border: none; background: none;" data-toggle="modal" data-target="#helpModalDDC"><i class="fa fa-question"></i></button> 
		<div class="modal fade" id="helpModalDDC" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Help: Discover Default Content</h4>
		      </div>

			<div class="modal-body">
			  <ol>
			    <?php 
			      foreach ($_SESSION['help_info'] as $note){
				if ($note['category'] == "Discover Default Content"){
			    ?>
				  <li><?php echo $note['data']?></li>
			    <?php
				}
			      }
			    ?>
			  </ol>

			</div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			    </div>

		      </div>
		    </div>
		  </div>
	      <!-- Status Dropdown -->
		  <select id="DDCstatus" name="DDCstatus" onchange="updateStatus(this.id, maptabname, <?php echo $webappid; ?>)">
 		    <?php  
		      switch ($mapstatus['ddcstatus']){
			case "Not Started": ?>
			  <option value="Not Started" selected> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "In Progress": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress" selected> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "Complete": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" selected> Complete </option>
		    <?php break; } ?> 
	      </select>
	    </div>
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <ul style="list-style:none">
	      <?php if($mapcheckboxes['nikto_ran']){ ?>
	      <li><input type="checkbox" id="nikto_ran" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Run Nikto</li>
	      <?php }else{?>
	      <li><input type="checkbox" id="nikto_ran" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Run Nikto</li>
	      <?php } ?>
	      
	      <?php if($mapcheckboxes['request_server_root']){ ?>
	      <li><input type="checkbox" id="request_server_root" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Request Server's Root Directory</li>
	      <?php }else{?>
	      <li><input type="checkbox" id="request_server_root" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Request Server's Root Directory</li>
	      <?php } ?>
	      
	      <?php if($mapcheckboxes['request_server_root_ua']){ ?>
	      <li><input type="checkbox" id="request_server_root_ua" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)" checked> Request Server's Root Directory With Different User-Agent Headers</li>
	      <?php }else{?>
	      <li><input type="checkbox" id="request_server_root_ua" onclick="updateCheckbox(this.id, maptabname, <?php echo $webappid; ?>)"> Request Server's Root Directory With Different User-Agent Headers</li>
	      <?php } ?>
	    </ul>
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    
    <div class="col-lg-4">
      <div class="panel panel-default">
	<div class="panel-heading">
	  <i class="fa fa-file-archive-o fa-fw"></i> Nikto Report(s)
	  <div class="pull-right">
	    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#niktoModal"><i class="fa fa-plus"></i> Add Report</button> 
		<div class="modal fade" id="niktoModal" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Upload Nikto Report</h4>
		      </div>
			<form class="m-t" role="form" method="post" action="webappdetails/nikto_submit.php?id=<?php echo $webappid; ?>">
			<div class="modal-body">
			  <textarea style="resize: none;" cols="121" rows="30" name="niktoReport"></textarea>
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
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-12">
	      <div class="table-responsive">
		
		    <table class="table table-striped table-bordered table-hover">
		      <thead>
			<tr>
			    <th>IP Address</th>
			    <th>Hostname</th>
			    <th>Port</th>
			</tr>
		    </thead>
		    <tbody>
		      <?php 
			$niktoreports = get_nikto_reports($webappid);
			foreach ($niktoreports as $niktoreport){
		      ?> 
			    <tr>
			      <!-- DOMAIN NAME -->
			      <td class="ipaddr">
				 <a data-toggle="modal" href="#niktoModal<?php echo $niktoreport['id'];?>"><?php echo $niktoreport['ipaddr'];?></a>
				  <div class="modal fade" id="niktoModal<?php echo $niktoreport['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					  <h4 class="modal-title">Nikto Report: <?php echo $niktoreport['hostname'] . ' : ' . $niktoreport['ipaddr']?></h4>
					</div>
					  <div class="modal-body">
					    <?php echo $niktoreport['report'];?>
					  </div>

					    <div class="modal-footer">
					      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					    </div>
					</div>
				      </div>
				    </div>
			      </td>

			      <!-- DOMAIN ADDED DATE -->
			      <td class="hostname">
				<?php echo $niktoreport['hostname'];?>
			      </td>
			      
			      <!-- ACTIONS -->
			      <td class="port">
				<?php echo $niktoreport['port'];?>   
			      </td>

			    </tr>
			<?php } ?>
		      </tbody>
		  </table>
		<!-- /.table-responsive -->
		</div>
		<!-- /.table-responsive -->
	    </div>
	    <!-- /.col-lg-12 -->
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
	  <i class="fa fa-compass fa-fw"></i> Enumerate Identifier-Specified Functions
	    <div class="pull-right">
	      <!-- Help Button -->
	      <button type="button" style="border: none; background: none;" data-toggle="modal" data-target="#helpModalEISF"><i class="fa fa-question"></i></button> 
		<div class="modal fade" id="helpModalEISF" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Help: Enumerate Identifier-Specified Functions</h4>
		      </div>
		      <form class="m-t" role="form" method="post" action="domain_update.php?id=<?php echo $domain['id'];?>&webapp=<?php echo $domain['webapp_id']; ?>">
			<div class="modal-body">
			  <ol>
			    <?php 
			      foreach ($_SESSION['help_info'] as $note){
				if ($note['category'] == "Enumerate Identifier-Specified Functions"){
			    ?>
				  <li><?php echo $note['data']?></li>
			    <?php
				}
			      }
			    ?>
			  </ol>

			</div>

			    <div class="modal-footer">
			      <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			    </div>
			</form>
		      </div>
		    </div>
		  </div>
	      <!-- Status Dropdown -->
		  <select id="EISFstatus" name="EISFstatus" onchange="updateStatus(this.id, maptabname, <?php echo $webappid; ?>)">
 		    <?php  
		      switch ($mapstatus['eisfstatus']){
			case "Not Started": ?>
			  <option value="Not Started" selected> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "In Progress": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress" selected> In Progress </option>
			  <option value="Complete" > Complete </option>
		    <?php break;
			case "Complete": ?>
			  <option value="Not Started"> Not Started </option>
			  <option value="In Progress"> In Progress </option>
			  <option value="Complete" selected> Complete </option>
		    <?php break; } ?> 
	      </select>
	    </div>
	</div>
	<!-- /.panel-heading -->
	
	<div class="panel-body">
	  <div class="row">
	    <div class="col-lg-12">
	    
	    <form class="m-t" role="form" method="post" action="webappdetails/identifieradd_submit.php?id=<?php echo $webappid; ?>">
	      <div class="form-group input-group">
		  <input type="text" name="url" placeholder="Enter Identifier-Specified URL" class="form-control">
		  <span class="input-group-btn">
		    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
		  </span>
	      </div>

	    </form>   
	    
	      <div class="table-responsive">
		
		    <table class="table table-striped table-bordered table-hover">
		      <thead>
			<tr>
			    <th>URLs</th>
			</tr>
		    </thead>
		    <tbody>
		      <?php 
			$identfuncs = get_ident_funcs($webappid);
			foreach ($identfuncs as $identfunc){
		      ?> 
			    <tr>
			      <!-- DOMAIN NAME -->
			      <td class="urls">
				<a target="_blank" href="<?php echo $identfunc['url']; ?>"><?php echo $identfunc['url']; ?></a>
			      </td>

			    </tr>
			<?php } ?>
		      </tbody>
		  </table>
		<!-- /.table-responsive -->
		</div>
		<!-- /.table-responsive -->

	    </div>
	    <!-- /.col-lg-12 -->
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
