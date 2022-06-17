<?php 
include ("../include/include.php");

if (isset($_POST["btn"])) {
	$number = $_POST["num"];
	$id_num = $_POST["id_num"];
	$sql = "SELECT * FROM login WHERE id_num = '$id_num'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$number1 = $row["contact_num"];
	$lastdigit = substr($number1, -3);

	if ($number == $lastdigit) {

		include("sms.php");
		echo "<script>alert('Your Password has been send via sms, please check your inbox')</script>";

	}else{
		echo "<script>alert('Incorrect Number')</script>";
	}



}




include ('head.php');

 ?>

<section class="login header p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body">
<form method="post" class="md-float-material">
<div class="auth-box">
<div class="row">
<div class="col-md-12">
<h3 class="text-left">Forgot Password </h3>
</div>
</div>
<p class="text-inverse b-b-default text-right">Back to <a href="../login_form.php">Login.</a></p>
<div class="input-group">
<input type="text" class="form-control" name="id_num" placeholder="I.D Number">
<span class="md-line"></span>
</div>


<div class="input-group">
<input type="text" class="form-control" name="num" placeholder="Last 3 digit of number registered in the Account">
<span class="md-line"></span>
</div>
<div class="row">
<div class="col-md-12">
<button type="submit" name="btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Confirm</button>
</div>
</div>
<hr />

</div>
</form>

</div>

</div>

</div>

</div>

</section>

<?php include ('footer.php'); ?>