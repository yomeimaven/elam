<div id="styleSelector">
</div>
</div>
</div>



</div>
</div>
</div>
</div>

<div style="margin-top: 10%" class="modal fade" id="modal2" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Equipment</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-b-0">
<form method="post" enctype="multipart/form-data" action="addequipment.php">
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Lab #</label>
<input type="text" name="lab#" class="form-control" placeholder="Lab 1/Lab 2">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Equipment #</label>
<input type="text" name="equipment#" class="form-control" placeholder="PC 1/ Laptop 1">
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
<form method="post" enctype="multipart/form-data" action="additem.php">

<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Name</label>
<input type="text" name="item_name" class="form-control" placeholder="Name">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Description</label>
<input type="text" name="description" class="form-control" placeholder="Description of item">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Quantity</label>
<input type="number" min="1" name="quantity" class="form-control" placeholder="Quantity">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">Image</label>
<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
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



<?php 


$it=1;
$sql = "SELECT * FROM itemtable WHERE lab_id=$idnum";
$result = mysqli_query($conn, $sql);
$date = date('M/d/Y');
	date_default_timezone_set("Asia/Kuala_Lumpur");
if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		
echo "<div style='margin-top: 10%' class='modal fade' id='modal2".$it."' tabindex='-1'>
<form method='post' action='remove_item.php'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title'>Remove Item</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body p-b-0'>
<form method='post'>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Name</label>
<input type='text' name='r_name' value='".$row["name"]."' class='form-control' placeholder='Name'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Quantity</label>
<input type='number' min='0' name='r_quantity' class='form-control' placeholder='Number of Item to Remove'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Reason of Removal</label>
<input type='text' name='r_reason' class='form-control' placeholder='Reason of Removal'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Date</label>
<input type='text' name='r_date' value='".$date."' class='form-control'>
</div>
</div>
</div>

</div>
<div class='modal-footer'>
<button type='submit' name='submit' class='btn btn-primary'>Confirm</button>
<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
</form>
</div>
</div>
</div>
</div>";


		
echo "<div style='margin-top: 10%' class='modal fade' id='modal3".$it."' tabindex='-1'>
<form method='post' action='update_item.php'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title'>Update Item</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body p-b-0'>
<form method='post'>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Name</label>
<input type='text' name='r_name' value='".$row["name"]."' class='form-control' placeholder='Name'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Quantity</label>
<input type='number' min='0' name='r_quantity' class='form-control' placeholder='Number of Item to Remove'>
</div>
</div>
</div>


</div>
<div class='modal-footer'>
<button type='submit' name='submit' class='btn btn-primary'>Confirm</button>
<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
</form>
</div>
</div>
</div>
</div>";


		$it++;
	}
}


 ?>






 <?php 


$it=1;
$sql = "SELECT * FROM equipmenttable";
$result = mysqli_query($conn, $sql);
$date = date('M/d/Y');
	date_default_timezone_set("Asia/Kuala_Lumpur");

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		
echo "<div style='margin-top: 10%' class='modal fade' id='modal4".$it."' tabindex='-1'>
<form method='post' action='maintenance.php'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title'>Add to Maintenance</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body p-b-0'>
<form method='post'>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Name</label>
<input type='text' name='equipnum' value='".$row["equipmentnum"]."' class='form-control' placeholder='Name'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Lab #</label>
<input type='text' value='".$row["labnum"]."' name='labnum' class='form-control'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Problem</label>
<input type='text' required='required' name='problem' class='form-control' placeholder='Detected Problem'>
</div>
</div>
</div>

<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Prefer Date</label>
<input type='date' required='required' name='m_date' class='form-control' placeholder='Detected Problem'>
</div>
</div>
</div>


</div>
<div class='modal-footer'>
<button type='submit' name='submit' class='btn btn-primary'>Confirm</button>
<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
</form>
</div>
</div>
</div>
</div>";


		
	echo "<div style='margin-top: 10%;' class='modal fade' id='modal5".$it."' tabindex='-1'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title'>Equipment Log</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body p-b-0'>

<div class='row'>
<div class='col-sm-12'>
<div class='card table-1-card'>
<div class='card-block'>
<div class='table-responsive'>
<table class='table'>
<thead>
<tr class='text-capitalize'>
<th>Date</th>
<th>Activity</th>

</tr>
</thead>
<tbody>";

$name = $row["equipmentnum"];
$labnum = $row["labnum"];
$history ="SELECT * FROM history WHERE name='$name' AND labnum='$labnum'";
$historyres = mysqli_query($conn, $history);
while($his = mysqli_fetch_assoc($historyres)){
	echo "<tr>
<td>".$his["h_date"]."
</td>
<td>".$his["activity"]."</td>
</tr>";
}


echo "
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


</div>

<div class='modal-footer'>
<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
</div>
</div>
</div>
</div>";



		$it++;
	}
}


 ?>




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


<?php 
$sql = "SELECT * FROM maintenance";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<div style='margin-top: 10%' class='modal fade' id='confirm".$row["id"]."' tabindex='-1'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title'>Confirmation</h5>
</div>
<form method='post' action='solve.php'>
<input type='text' name='id' value='".$row["id"]."' style='display: none;'>
<div class='modal-body p-b-0'>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Name</label>
<input type='text' class='form-control' value='".$row["name"]."'>
<input style='display:none' type='text' class='form-control' name='labnum' value='".$row["labnum"]."'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Problem</label>
<input type='text' class='form-control' value='".$row["problem"]."'>
</div>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Solution</label>
<input type='text' class='form-control' placeholder='Solution/Parts Replacement' name='solution'>
</div>
</div>
</div>
</div>
<div class='modal-footer'>
<button type='submit' name='submit' value='".$row["name"]."' class='btn btn-primary'>Confirm</button>
<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
</div>
</form>
</div>
</div>
</div>";



echo "<div style='margin-top: 10%' class='modal fade' id='resched".$row["id"]."' tabindex='-1'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title'>Reschedule</h5>
</div>
<div class='modal-body p-b-0'>
<form method='post' action='resched.php'>
<div class='row'>
<div class='col-sm-12'>
<div>
<label class='form-control-label'>Please select prefer date</label>
<input type='date' class='form-control' name='date'>
</div>
</div>
</div>

</div>
<div class='modal-footer'>
<button type='submit' name='submit' value='".$row["id"]."' class='btn btn-primary'>Confirm</button>
<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
</div>
</div>
</div>
</div>
</form>";

	}

 ?>

<?php include ('script.php'); ?>
</body>
</html>






