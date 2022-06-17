<div id="styleSelector">
</div>
</div>
</div>



</div>
</div>
</div>
</div>

<div style="margin-top: 10%" class="modal fade" id="modal" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Item</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-b-0">
<form>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Name</label>
<input type="text" class="form-control" placeholder="Item Name">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Description</label>
<input type="text" class="form-control" placeholder="Reason of Laboratory Removal">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Quantity</label>
<input type="text" class="form-control" placeholder="Reason of Laboratory Removal">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Image</label>
<input type="file" class="form-control" placeholder="Reason of Laboratory Removal">
</div>
</div>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Confirm</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>



<div style="margin-top: 5%" class="modal fade" id="account" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Account Creation for Admin</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-b-0">
<form method="post" enctype="multipart/form-data" action="../admincreation.php">
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Name</label>
<input type="text" name="name" class="form-control" placeholder="Last Name, First Name M.I" required="required">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Username</label>
<input type="text" name="username" class="form-control" placeholder="I.D Number" required="required">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Password</label>
<input type="text" name="password" class="form-control" placeholder="Password" required="required">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Assigned Laboratory</label>

<select class="form-control" name="assigned_lab" required="required">
<option></option>
<?php

$sql = "SELECT name FROM labtable";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<option>".$row["name"]."</option>";
}




					 ?>	
</select>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="submit" name="submit" class="btn btn-primary">Confirm</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</form>
</div>
</div>
</div>
</div>


<?php include ('script.php'); ?>
</body>
</html>
