
<?php
session_start();
include ('../../../../include/include.php');

if (isset($_POST['submit'])) {
	$iter = 0;
	$b_name = $_SESSION["name"];
	$year_section = $_SESSION["year"];
	$purpose = $_SESSION["purpose"];
	$id_num = $_SESSION["ID"];
	$noted = $_SESSION["noted"];
	$date = date('M/d/Y ');
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$time = date("h:i:sa");
	$checker = 0;

	$selector=$_SESSION["selector"];
	$check = "SELECT b_name FROM releasing WHERE b_name='$b_name' AND selector='$selector'";
	$resultcheck = mysqli_query($conn, $check);
	$count = mysqli_num_rows($resultcheck);

	if ($count !=0) {
		$checker++;
		echo "<script>alert('Please returned the last borrowed item before adding new reservation')</script>";
	}else{

	while ($iter!=$_SESSION["iter"]) {
		//$serial = $_SESSION["Serial$iter"];
		$item_name = $_SESSION["Name$iter"];
		$quantity = $_SESSION["Quantity$iter"];
		//$comment = $_SESSION["Comment$iter"];
		$duration = $_SESSION["Duration$iter"];
		$selector = $_SESSION["selector"];

		//checking availability

		$sqlavail = "SELECT * FROM itemtable WHERE name='$item_name'";
		$reavail = mysqli_query($conn,$sqlavail);
		$rowavail = mysqli_fetch_assoc($reavail);
		$checkavailability = $rowavail["available"] - $quantity;
		if ($checkavailability<0) {
			$checker++;
			 echo "<script>alert('Please Check Item availability')</script>";
			 header("Refresh: 1; url=../../laboratories/$selector");
		}




		$sql = "INSERT INTO reservation(b_name, year_section, purpose, id_num, noted_by, item_name, quantity, b_time, b_date, selector, duration) VALUES('$b_name', '$year_section', '$purpose', '$id_num', '$noted', '$item_name', '$quantity', '$time', '$date', '$selector', '$duration')";
		mysqli_query($conn,$sql);

		//update reservation
		$sqlcheck = "SELECT total_reservation, available,total_borrowed, quantity FROM itemtable WHERE name = '$item_name'";
		$rescheck = mysqli_query($conn, $sqlcheck);
		$rowcheck = mysqli_fetch_assoc($rescheck);
		$total_reserv = $rowcheck["total_reservation"] + $quantity;
		$total_borrowed = $rowcheck["total_borrowed"];
		$all = $total_reserv + $total_borrowed;
		$available = $rowcheck["quantity"] - $all;

		$sql1 = "UPDATE itemtable SET total_reservation = '$total_reserv', available = '$available' WHERE name = '$item_name'";




		$iter++;
	}

}


	if ($checker==0) {
		$sqlnotif = "INSERT INTO notiftable(name, year_section, selector, n_time, n_date) VALUES('$b_name', '$year_section', '$selector', '$time', '$date')";

		if (mysqli_query($conn,$sqlnotif)) {
			mysqli_query($conn,$sql1);
			
			 echo "<script>alert('Reserved Successfully')</script>";
		 header("Refresh: 1; url=../../laboratories/".$_SESSION["selector"]);
		}
		
	}
	else{
		echo mysqli_error($conn);
	}

}

 include ('head.php'); include ('topnav.php'); include ('sidenav.php'); ?>

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>Equipment Reservation</h4>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">
<form method="post">
<div class="card">
<div class="card-header">
<h5 class="mt-3"><?php echo $_SESSION["name"]; ?></h5>
<P style="float: right;" ><?php echo "Date: ". date('M/d/Y '); date_default_timezone_set("Asia/Kuala_Lumpur");
echo " <br> Time: ". date("h:i:sa"); ?></P>

</div>
<div class="card-block table-border-style">
<div class="table-responsive">
<table class="table">
<thead>
<tr class="border-double">
<th>#</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Duration</th>
</tr>
</thead>

<?php 
$iter=0;
$number =1;
$days;
while ($_SESSION["iter"]!=$iter) {

	if ($_SESSION["Duration$iter"]>1) {
		$days = "Days";
	}else{
		$days = "Day";
	}
	
	echo "<tbody>
<tr>
<th scope='row'>".$number."</th>";

echo "<td>".$_SESSION["Name$iter"]."</td>";
echo "<td>".$_SESSION["Quantity$iter"]."</td>";
echo "<td>".$_SESSION["Duration$iter"]." ".$days."</td>";
echo "</tr>
<tr>
</tbody>";
$number=$number+1;
$iter++;

}


 ?>


</table>
<button class="btn btn-primary m-3" style="float: right;" type="submit" name="submit">Confirm</button>
</div>
</div>
</div>

</div>
</div>
</div>
</form>

</div>
</div>
<?php include ('footer.php'); ?>