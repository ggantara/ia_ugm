 	<h3><b>User Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("supervisor/user/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['user_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 						
 							<a href="<?php echo base_url("supervisor/user/edit/$value[user_id]") ?>" class="btn btn-info"> Edit</a>
 							<?php if ($value['user_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/user/delete/$value[user_id]") ?>" class="btn btn-danger">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['user_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/user/status/$value[user_id]") ?>" class="btn btn-success">Send Permission</a>
 						<?php endif ?>
 					</td>
 					
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
