<?php $con = mysqli_connect("localhost", "root", "", "multi_login"); ?>
<!DOCTYPE html>
<html>
			<head>
						<title>Edit Attendence</title>
						<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta http-equiv="X-UA-Compatible" content="ie=edge">
								<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
										crossorigin="anonymous">
								<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
										crossorigin="anonymous">
			</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h4 class="display-5">School Management <span>System</span></h4> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <li class="nav">
	<a class="btn btn-light" href="home.php"><h5><i>back</i></h5></a>
	</li>
  </div>
</nav>
<?php
$no = $_GET['no'];

$result = mysqli_query($con, "SELECT * FROM attendence WHERE no  = '$no'");
$test = mysqli_fetch_array($result);
if (!$result) {
    die("Error: Data not found..");
}
$std_id = $test['registration_id'];
$lec_name = $test['Lecturename'];
$lec_date = $test['Lecturedate'];
$lec_starttime = $test['Starttime'];
$lec_endtime = $test['endtime'];

if (isset($_POST['save'])) {
    $id_save = $_POST['Student_Id'];
    $nam_save = $_POST['Lecturename'];
    $date_save = $_POST['lecturedate'];
    $start_save = $_POST['Starttime'];
    $end_save = $_POST['endtime'];


    mysqli_query($con, "UPDATE attendence SET registration_id ='$id_save',  Lecturename='$nam_save',  lecturedate='$date_save',  Starttime='$start_save' ,endtime='$end_save' WHERE no = '$no'")
        or die(mysqli_error());
    echo "Saved!";

    header("Location: view-attendence.php");
    exit();
}
?>

<h1 class="lead display-4">Update Student Attendence</h1>
<form class="form-horizontal form-group" method="post">

	<input type="text" name="Student_Id" class="form-control" value="<?php echo $std_id ?>"/>
	<input type="text" name="Lecturename" class="form-control" value="<?php echo $lec_name ?>"/>
	<input type="text" name="lecturedate" class="form-control" value="<?php echo $lec_date ?>"/>
	<input type="time" name="Starttime" class="form-control" value="<?php echo $lec_starttime ?>"/>
    <input type="time" name="endtime" class="form-control" value="<?php echo $lec_endtime ?>"/>
    <button class="btn btn-success" type="submit" name="save">Save</button> 
</form>
</body>
</html>