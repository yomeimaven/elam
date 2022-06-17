<?php 
session_start();
$_SESSION["selector"]=1;
include ('../../../include/include.php');
if (!isset($_SESSION["login"])) {
	header("Refresh: 1; url=../../login_form.php");
}

$idnum=1;

$sqlname = "SELECT Name FROM labtable WHERE  lab_id ='$idnum'";
$namres = mysqli_query($conn, $sqlname);
$name = mysqli_fetch_assoc($namres);


include ('head.php'); include ('topnav.php'); include ('sidenav.php');

 ?>

<div class="page-body">
<div class="page-header-title mt-3"> <center>
<h5><i> <?php echo strtoupper($name["Name"]); ?> LABORATORY </i></h5>
</center>
</div>
<div class="row">






<div class="col-sm-12">

<br>
<div class="card">

<div class="card-header">
<h5 id="header">Item List</h5>
<div class="btn-group btn-group-xs f-right">
		<button id="lab" type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"> <i class="icofont icofont-filter m-r-5"></i>Equipment List
</button>
  

</div>

</div>


<div style="display: none" id="per2" class="card-block">
<div class="table-responsive">
<div class="table-content">
<div class="project-table">
<table style="text-align: center;" id="e-product-list" class="table table-hover dt-responsive nowrap">
<thead>
<tr>
<th>Picture</th>
<th>Lab #</th>
<th style="text-align: center;">Equipment #</th>
<th style="text-align: center;">Status</th>
<th style="text-align: center;">Action</th>
</tr>
</thead>
<tbody>

<?php 

$it=1;
$sql = "SELECT * FROM equipmenttable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		echo "<tr>
<td style='width:20%;' class='pro-list-img'>";
echo "<img style='width:50%; float:left; border-radius: 5px;' src='pc.png' class='img-fluid' alt='tbl'></td>";
echo "<td>".$row["labnum"]."</td>";
echo "
<td class='pro-name' style='text-center: left;'>";

echo "<span>".$row["equipmentnum"]."</span>
</td>";
if ($row["status"]=="Working") {
	$color = "green";
}else{
	$color = "red";
}


echo "<td style='color:".$color."'>".$row["status"]."</td>";

echo "<td class='action-icon'>
<a data-toggle='modal' href='#modal5".$it."' class='text-muted' data-toggle='tooltip' data-placement='top' title='History Log'><i class='icofont icofont-files'></i></a>
<a data-toggle='modal' href='#modal4".$it."' class='text-muted' data-toggle='tooltip' data-placement='top' title='Request Maintenance'><i class='icofont icofont-meeting-add'></i></a>
</td>
</tr>";

$it++;

	}
}

 ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

<div id="per1" class="card-block">
<div class="table-responsive">
<div class="table-content">
<div class="project-table">
<table style="text-align: center;" id="e-product-list" class="table table-hover dt-responsive nowrap">
<thead>
<tr>
<th>Picture</th>
<th style="text-align: center;">Item Name</th>
<th style="text-align: center;">Total Quantity</th>
<th style="text-align: center;">Total Borrowed</th>
<th style="text-align: center;">Total Reserved</th>
<th style="text-align: center;">Available</th>
</tr>
</thead>
<tbody>

<?php 

$it=1;
$sql = "SELECT * FROM itemtable WHERE lab_id=$idnum";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		echo "<tr>
<td style='width:20%;' class='pro-list-img'>";
echo "<img style='width:70%; float:left; border-radius: 5px;' src='../../../admin/dashboard/laboratories/uploads/".$row["img"]."' class='img-fluid' alt='tbl'>";
echo "</td>
<td class='pro-name' style='text-center: left;'>";
echo "<h6>".$row["name"]."</h6>";
$_SESSION["name$it"] = $row["name"];
echo "<span>".$row["description"]."</span>
</td>";
echo "<td>".$row["quantity"]."</td>
<td>";
echo "
<label class='text-info'>".$row["total_borrowed"]."</label>
</td>";
echo "<td>
<label class='text-warning'>".$row["total_reservation"]."</label>
</td>";
echo "<td>
<label class='text-success'>".$row["available"]."</label>
</td></tr>";

$it++;

	}
}

 ?>


</tbody>
</table>
</div>
</div>
</div>
</div>


<div id="maintenance" style="display: none;" class="card">
<div class="card-header">
<h5>List of equipment Under Maintenance</h5>

</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="e-product-list" class="table table-bordered table-hover nowrap">
<thead>
<tr>
<th style="text-align: center;">Name</th>
<th style="text-align: center;">Laboratory #</th>
<th style="text-align: center;">Problem</th>
<th style="text-align: center;">Date & Time</th>
<th style="text-align: center;">Update Status</th>
</tr>
</thead>
<tbody>

<?php



$sql = "SELECT * FROM maintenance";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
<td style='text-align:center'>".$row["name"]."</td>
<td style='text-align:center'>".$row["labnum"]."</td>
<td style='text-align:center'>".$row["problem"]."</td>
<td style='text-align:center'>".$row["m_date"]."</td>
<td class='text-center'>
<a class='dropdown-toggle addon-btn' data-toggle='dropdown' aria-expanded='true'>
<i class='icofont icofont-ui-settings'></i>
</a>
<div class='dropdown-menu dropdown-menu-right'>
<a class='dropdown-item' data-toggle='modal' href='#confirm".$row["id"]."'><i class='icofont icofont-ui-check'></i></i>Solved</a>
<div role='separator' class='dropdown-divider'></div>
<a class='dropdown-item' data-toggle='modal' href='#resched".$row["id"]."'><i class='icofont icofont-refresh'></i>Reschedule</a>
</div>
</td>
</tr>";
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

<?php include ('footer.php'); ?>