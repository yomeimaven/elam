<?php 
session_start();
$selector = $_SESSION["selector"];
include ('../../../include/include.php');
if (!isset($_SESSION["login"])) {
	header("Refresh: 1; url=../../login_form.php");
}

include ('head.php'); include ('topnav.php'); include ('sidenav.php');

 ?>

<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">

<div class="card-header">
<h5>Laboratories Activity's</h5>
</div>
<div class="card-block">
<div class="table-responsive">
<div class="table-content">
<div class="project-table">
<table id="e-product-list" class="table table-hover dt-responsive nowrap">
<thead>
<tr>
<th>Date</th>
<th>Activity</th>
<th>From</th>
</tr>
</thead>
<tbody>


<?php 
$idnum=1;
$it=1;
$sql = "SELECT * FROM lab_activity";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {

echo "<tr>

<td class='pro-name'>".$row["a_date"]."</td>
<td class='pro-name'>".$row["activity"]."</td>
<td class='pro-name'>".$row["a_from"]."</td>



 </tr>";
 $id = $row["id"];

 $update = "UPDATE lab_activity SET view = '2' WHERE id='$id'";
 mysqli_query($conn,$update);


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


<script type="text/javascript">
	$(document).ready(function(){
		$("#e-product-list").DataTable();
	});
</script>