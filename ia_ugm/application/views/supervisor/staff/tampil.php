<h3><b>Staff Data</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/staff/add") ?>" class="btn btn-success btn-sm">Create New</a>
<br>
<br>

<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Position</th>
			<th>Email</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($staff as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['first_name'] ?></td>
				<td><?php echo $value['last_name'] ?></td>
				<td><?php echo $value['person_position'] ?></td>
				<td><?php echo $value['person_email'] ?></td>
				<td>
					<a href="" class="btn btn-warning btn-xs">Detail</a>
					<a href="<?php echo base_url("supervisor/staff/edit/$value[person_id]") ?>" class="btn btn-info btn-xs">Edit</a>
					<a href="<?php echo base_url("supervisor/staff/delete/$value[person_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
	
</table>