<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div style="margin-top: 10%" class="modal fade" id="Add_reservation" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add As New Type Of Item</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-b-0">
<form>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Item Name</label>
<input type="text" class="form-control" placeholder="Item Name">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Quantity</label>
<input type="text" class="form-control" placeholder="Quantity">
</div>
<div>
<label class="form-control-label">Item Type</label>
<input type="text" class="form-control" placeholder="Item Type">
</div>
<div>
<label class="form-control-label">Picture</label>
<input type="file" class="form-control" placeholder="Picture">
</div>
</div>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Submit</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>


<div style="margin-top: 10%" class="modal fade" id="Existing" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add To Existing Type Of Item</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-b-0">
<form>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Item Name</label>
<input type="text" class="form-control" placeholder="Item Name">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Quatity</label>
<input type="text" class="form-control" placeholder="Quantity">

<div>
<label class="form-control-label">Type</label>
<select name="select" class="form-control form-control-default">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>

<div>
<label class="form-control-label">Picture</label>
<input type="file" class="form-control" placeholder="Picture">
</div>
</div>
</div>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Submit</button>
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
<form method="post" enctype="multipart/form-data" action="../../admincreation.php">
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

