<?php 
session_start();
include ('../../../include/include.php');

if (isset($_POST["export"])) {
	header("location:exporttop.php");
}

if (isset($_POST["print"])) {
	header("location:printtop.php");
}

include ('head.php'); include ('topnav.php'); include ('sidenav.php'); ?>

<div class="main-body">
<div class="page-wrapper">


<div class="page-body">
	<div class="page-header-title mt-3"> <center>
<h6><i> LABORATORY OF INFORMATION TECHNOLOGY </i></h6>
</center>
</div>
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Top Borrowed Item</h5>
<span>List of Top 10 Borrowed</span>


</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table style="text-align: center;" class="table table-bordered table-hover nowrap">
<thead>
<tr>
<th style="text-align: center;">Name</th>
<th style="text-align: center;">Quantity</th>
<th style="text-align: center;">No. of Current Borrower</th>
<th style="text-align: center;">No. of Times Borrowed</th>
</tr>
</thead>
<tbody>

<?php 
$selector = $_SESSION["selector"];
$sql = "SELECT * FROM itemtable WHERE lab_id='$selector' AND no_times_borrowed !=0 ORDER BY no_times_borrowed DESC";
$result = mysqli_query($conn,$sql);
$iter = 1;
if (mysqli_num_rows($result)>0) {
	while ($row1 = mysqli_fetch_assoc($result)) {

		$itemn = $row1["name"];
		$bor = "SELECT DISTINCT b_name FROM releasing WHERE item_name='$itemn'";
		$bores = mysqli_query($conn,$bor);

		$no_borrower = mysqli_num_rows($bores);


		echo "<tr>";
		echo "<td>".$row1["name"]."</td>";
		echo "<td>".$row1["quantity"]."</td>";
		echo "<td>".$no_borrower."</td>";
		echo "<td>".$row1["no_times_borrowed"]."</td>";
		echo "</tr>";
		$iter++;
	}
}


 ?>


</tbody>
</table>
</div>
</div>
</div>





</div>
</div>
</div>

</div>
</div>
<?php include ('footer.php'); ?>