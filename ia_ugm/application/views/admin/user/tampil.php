 	<h3><b>User Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("admin/user/add") ?>" class="btn btn-success btn-sm">Create New</a>
 	<br>
 	<br>
 	<table class="table table-bordered table-striped table-responsive" id="thetable">
 		<thead>
 			<tr> 
 				<th>No</th>
 				<th>Username</th>
 				<th>Email</th>
 				<th>Level</th>
 				<th>Status</th>
 				<th>Option</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($user as $key => $value): ?>
 				<tr>
 					<td><?php echo $key+1; ?></td>
 					<td><?php echo $value['user_name']; ?></td>
 					<td><?php echo $value['user_email']; ?></td>
 					<td><?php echo $value['user_level'] ?></td>
 					<td>
 						<?php if ($value['user_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['user_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['user_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['user_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/user/status/$value[user_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/user/status/$value[user_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<!-- <a href="<?php echo base_url("#user"); ?>" class="btn btn-warning btn-xs">Detail</a> -->
 						<a href="<?php echo base_url("admin/user/edit/$value[user_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/user/delete/$value[user_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 					</td>
 					</tr>

 				<?php endforeach ?>
 			</tbody>
 		</table>
