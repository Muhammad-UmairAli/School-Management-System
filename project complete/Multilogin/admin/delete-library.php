
<?php
$no = $_REQUEST['no'];
	
// sending query
$con = mysqli_connect("localhost", "root", "", "multi_login");
mysqli_query($con, "DELETE FROM library WHERE no = '$no'") or die(mysqli_error());
header("Location: view-library.php");
exit();
mysqli_close($con);
?>