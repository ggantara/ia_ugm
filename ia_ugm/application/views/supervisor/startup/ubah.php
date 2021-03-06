<h3><b>Form Startup</b></h3>
<hr> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Startup Name</label>
		<div>
			<input type="text" name="startup_name" class="form-control" required=""
			value="<?php echo $startup['startup_name'] ?>">
		</div>
	</div>
	 <div class="form-group">
		<label>Existing Image</label>
		<img width="100" src="<?php echo base_url("assets/startup/$startup[startup_image]") ?>">
		
	</div>
	<div class="form-group">
		<label>New Image</label>
		<input type="file" name="startup_image" class="form-control" required=""
		value="<?php echo $startup['startup_image'] ?>">	
		<p><small style="color: red">*use 3:4 ratio image for better resolution</small></p>		
	</div>
	<div class="form-group">
		<label>Startup Description</label> 
		<div>
			<input type="text" name="startup_description" class="form-control" required=""
			value="<?php echo $startup['startup_description'] ?>">
		</div>
	</div>
	<div class="form-group"> 
		<label>Startup Link</label>
		<div>
			<input type="text" name="startup_weburl" class="form-control"
			value="<?php echo $startup['startup_weburl'] ?>">
		</div>
	</div>
	<div class="form-group"> 
		<label>Startup Category</label>
		<div>
			<input type="text" name="startup_category" class="form-control"
			value="<?php echo $startup['startup_category'] ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label>Startup Status</label>
		<div>
			<select class="form-control" name="startup_status">
				<option>Startup Status</option>
				<option value="active"
				<?php if($startup['startup_status']=='active'){echo "selected";} ?>>Active</option>
				<option value="inactive"
				<?php if($startup['startup_status']=='inactive'){echo "selected";} ?>>Inactive</option>
			</select>
		</div>
	</div>
	
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("supervisor/startup/"); ?>" class="btn btn-danger">Cancel</a>

	
</form>