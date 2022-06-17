<?php
session_start();
include('../../../include/include.php');

$na = $_SESSION["logname"];
$info = "SELECT * FROM login WHERE name = '$na'";
$infore = mysqli_query($conn, $info);
$inforo = mysqli_fetch_assoc($infore);




if (isset($_POST['submit'])) {
	$_SESSION["name"] = $_POST['b_Name'];
	$_SESSION["year"] = $_POST['b_Year&Section'];
	$_SESSION["purpose"] = $_POST['b_Purpose'];
	$_SESSION["ID"] = $_POST['b_ID'];
	$_SESSION["noted"] = $_POST['b_Noted'];
	header("Refresh: 0; url=items/item reservation.php");	
}


 include ('head.php'); include ('topnav.php'); include ('sidenav.php'); 

?>

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>Equipment Reservation</h4>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-10 mx-auto">

<div class="card">
<div class="card-header">
<h5>Borrowers Information</h5>
<span>Please fill in the information correctly</span>
</div>
<div class="card-block">

<form method="post">

<div class="form-group row">
<label class="col-sm-2 col-form-label">Name: </label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-uppercase" value="<?php echo $inforo["name"] ?>" name="b_Name" placeholder="Last Name, First Name M.I" required="required">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Year & Section</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-uppercase" name="b_Year&Section" placeholder="Year & Section" required="required">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Purpose</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-uppercase" name="b_Purpose" placeholder="Purpose of Borrowing Equipment" required="required">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Control No.</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-uppercase" value="<?php echo $inforo["id_num"] ?>" name="b_ID" placeholder="ID Number" required="required">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Noted By</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-uppercase" name="b_Noted" placeholder="Noted by" required="required">
</div>
</div>

<button style="float: right;" name="submit" class="btn btn-primary btn-outline-primary"><i class="icofont icofont-check-circled"></i>Proceed</button>


</form>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
<?php include ('footer.php'); ?>