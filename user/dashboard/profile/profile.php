<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("location:../../login_form.php");
}else{
include ('../../../include/include.php');
$sql = "SELECT * FROM login";
$result = mysqli_query($conn,$sql);

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$twitter = $_POST["twitter"];
	$password = md5($_POST["password"]);
	$skype = $_POST["skype"];

	$update = "UPDATE login SET password='$password', name='$name', Mobile_no='$mobile', Address='$address', Email='$email', Twitter='$twitter', Skype='$skype' ";
	if (mysqli_query($conn, $update)) {
		echo "<script>alert('Update Successfuly')</script>";
	}else{
		mysqli_error($conn);
	}


}

}


 include ('head.php'); include ('topnav.php'); include ('sidenav.php');

 ?>

<div class="main-body user-profile">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>User Profile</h4>
</div>
</div>


<div class="page-body">

<div class="row">
<div class="col-lg-12">
<div class="cover-profile">
<div class="profile-bg-img">
<img class="profile-bg-img img-fluid" src="bg-img1.jpg" alt="bg-img">
<div class="card-block user-info">
<div class="col-md-12">
<div class="media-left">
<a href="#" class="profile-image">
<img class="user-img img-circle" src="user.png" alt="user-img">
</a>
</div>
<div class="media-body row">
<div class="col-lg-12">
<div class="user-title">
<h2><?php $ro = mysqli_fetch_assoc($result);
echo $_SESSION["logname"];

 ?></h2>
<span class="text-white"><?php echo $_SESSION["login"]; ?></span>
</div>
</div>
<div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12">



<div class="tab-content">

<div class="tab-pane active" id="personal0" role="tabpanel">

<div class="card">
<div class="card-header">
<h5 class="card-header-text">About Me</h5>
<button id="edit" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>
<div id="per1" class="card-block">
<div class="view-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-12 col-xl-6">
<table class="table m-0">
<tbody>
<tr>

<?php 
$name = $_SESSION["logname"];
$sql = "SELECT * FROM login WHERE name='$name'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {

		echo "<tr>
<th scope='row'>Name</th>
<td>".$row["name"]."</td>
</tr>";

		echo "<tr>
<th scope='row'>Password</th>
<td>".$row["password"]."</td>
</tr>";
		echo "<tr>
<th scope='row'>Address</th>
<td>".$row["Address"]."</td>
</tr>";
echo "<tr>

<th scope='row'>Email</th>
<td>".$row["Email"]."</td>
</tr>
</tbody>
</table>
</div>";


echo "<div class='col-lg-12 col-xl-6'>
<table class='table'>
<tbody>";


echo "<tr>
<th scope='row'>Mobile Number</th>
<td>".$row["contact_num"]."</td>
</tr>";

echo "<tr>
<th scope='row'>Twitter</th>
<td>".$row["Twitter"]."</td>
</tr>";
echo "<tr>
<th scope='row'>Skype</th>
<td>".$row["Skype"]."</td>
</tr>";

echo "</tbody>
</table>
</div>";
	}
}


 ?>

</div>

</div>

</div>

</div>

</div>

</div>






<div style="display: none;" id="per2" class="card-block">
	<?php 
	$name = $_SESSION["logname"];
$sql1 = "SELECT * FROM login WHERE name='$name'";
$result1 = mysqli_query($conn,$sql);
$row1 = mysqli_fetch_assoc($result1);
 ?>
<form method="post">
<div class="edit-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-6">
<table class="table">
<tbody>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
<input type="text" class="form-control" required="required" value=" <?php echo $row1["name"] ?>" name="name" placeholder="Last Name, First Name, M.I">
</div>
</td>
</tr>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
<input type="text" class="form-control" required="required" value=" <?php echo $row1["Mobile_no"] ?>" name="mobile" placeholder="Mobile Number">
</div>
</td>
</tr>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-ui-lock"></i></span>
<input type="text" class="form-control" required="required" name="password" placeholder="Password">
</div>
</td>
</tr>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-social-google-plus"></i></span>
<input type="text" class="form-control" required="required" name="email" placeholder="Email">
</div>
</td>
</tr>

</tbody>
</table>
</div>

<div class="col-lg-6">
<table class="table">
<tbody>

<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
<input type="text" class="form-control" required="required" name="address" placeholder="Address">
</div>
</td>
</tr>	
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
<input type="text" class="form-control" required="required" name="twitter" placeholder="Twitter">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
<input type="email" class="form-control" required="required" name="skype" placeholder="Skype Id">
</div>
</td>
</tr>
<tr>
<td>

</td>
</tr>
</tbody>
</table>
</div>

</div>

<div class="text-center">
<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light m-r-20">Save</button>
<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
</div>
</form>
</div>
</div>

</div>

</div>

</div>

</div>

</div>







</div>

</div>
</div>
</div>

</div>
</div>

<?php include ('footer.php'); ?>