<script type="text/javascript" src="../../../bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../../../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../../../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../../../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../../../bower_components/classie/classie.js"></script>

<script type="text/javascript" src="../../../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../../../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../../../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../../../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="../../../assets/js/script.js"></script>
<script src="../../../assets/js/pcoded.min.js"></script>
<script src="../../../assets/js/demo-12.js"></script>
<script src="../../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../../assets/js/jquery.mousewheel.min.js"></script>
<script> 

$(document).ready(function(){
    $("#flipers").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<script> 


$(document).ready(function(){
     var x = "Item List";
     var y = "Laboratory Equipment";
    $("#lab").click(function(){

       

        if (x =="Item List") {
            document.getElementById("header"). innerHTML = "Equipment List";
            document.getElementById("lab"). innerHTML = "<i class='icofont icofont-file-text'></i>Item List";
            x = "Equipment List";
            y = "Item List";
        }else{
            document.getElementById("header"). innerHTML = "Item List";
            document.getElementById("lab"). innerHTML = "<i class='icofont icofont-filter m-r-5'></i>Equipment List";
            x = "Item List";
            y = "Equipment List";
        } 

        $("#per1").fadeToggle("fast");
        $("#per2").fadeToggle("fast");
        $("#maintenance").fadeToggle("fast"); 

    });
});
</script>

<?php 
include ('../../../include/include.php');
$sqlside1 = "SELECT Name FROM labtable";
$resultside1 = mysqli_query($conn, $sqlside1);

if (mysqli_num_rows($resultside1)>0) {
	while ($ro = mysqli_fetch_assoc($resultside1)) {
		echo "<script>
		$(document).ready(function(){
	 $('#".$ro["Name"]."').click(function(){
        $('#testi').val('".$ro["Name"]."');
    });
    });
</script>";
	}
}

?>
