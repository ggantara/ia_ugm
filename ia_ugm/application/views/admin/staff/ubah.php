<h3>Staff Form</h3>
<hr>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" required=""
		value="<?php echo $staff['first_name'] ?>">
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control" required=""
		value="<?php echo $staff['last_name'] ?>">
	</div>
	
	<div class="form-group">
		<label>Front Degree</label>
		<input type="text" name="front_degree" class="form-control"
		value="<?php echo $staff['front_degree'] ?>">
	</div>
	<div class="form-group">
		<label>Back Degree</label>
		<input type="text" name="back_degree" class="form-control"
		value="<?php echo $staff['back_degree'] ?>">
	</div>
	
	 <div class="form-group">
		<label>Existing Image</label>
		<img width="100" src="<?php echo base_url("assets/staff/$staff[person_image]") ?>">
		
	</div>
	<div class="form-group">
		<label>New Image</label>
		
		<input type="file" name="person_image" class="form-control">		
		
	</div>
	<div class="form-group">
		<label>Staff Position</label>
		<input type="text" name="person_position" class="form-control"
		value="<?php echo $staff['person_position'] ?>">
	</div>
	<div class="form-group">
		<label>Staff Email</label>
		<input type="email" name="person_email" class="form-control" required=""
		value="<?php echo $staff['person_email'] ?>">
	</div>
	 <div class="form-group">
	 	<label>Staff Description</label>
	 	<textarea class="form-control" required="" name="person_description"><?php echo $staff['person_description'] ?></textarea>
	 </div>
	 <div class="form-group">
	 	<label>Staff Linkedin</label>
	 	<input type="text" name="person_linkedin" class="form-control"
	 	value="<?php echo $staff['person_linkedin'] ?>">
	 </div>
	 <div class="form-group">
	 	<label>Staff Priority</label>
	 	<select class="form-control" name="person_priority">
				<option>- Priority Level -</option>
				<option value="1" <?php if ($staff['person_priority']=='1') {
					echo "selected";
				} ?>>1</option>
				<option value="2" <?php if ($staff['person_priority']=='2') {
					echo "selected";
				} ?>>2</option>
				<option value="3" <?php if ($staff['person_priority']=='3') {
					echo "selected";
				} ?>>3</option>
				<option value="4" <?php if ($staff['person_priority']=='4') {
					echo "selected";
				} ?>>4</option>

			</select>
	 </div>
	 <div class="form-group">
	 	<label>Position</label>
	 	<input type="text" name="person_level" value="staff" readonly="" class="form-control">
	 </div>
	 <button class="btn btn-info ">Submit</button>
	 <a href="<?php echo base_url("admin/staff") ?>" class="btn btn-danger ">Cancel</a>
</form>