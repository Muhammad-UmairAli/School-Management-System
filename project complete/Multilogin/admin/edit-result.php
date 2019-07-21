<?php $con = mysqli_connect("localhost", "root", "", "multi_login"); ?>
<!DOCTYPE html>
<html>
			<head>
						<title>Edit Result</title>
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

$result = mysqli_query($con, "SELECT * FROM result WHERE no  = '$no'");
$test = mysqli_fetch_array($result);
if (!$result) {
    die("Error: Data not found..");
}
$std_id = $test['registration_id'];
$std_name = $test['std_name'];
$sub_name = $test['sub_name'];
$total_marks = $test['marks'];
$obtained_marks = $test['obtainedmarks'];
$per_marks = $test['percentages'];


if (isset($_POST['save'])) {
    $id_save = $_POST['id'];
    $nam_save = $_POST['nam'];
    $sub_save = $_POST['subnam'];
    $marks_save = $_POST['marks'];
    $obmarks_save = $_POST['omarks'];
    $per_save = $_POST['per'];



    mysqli_query($con, "UPDATE result SET registration_id ='$id_save',  std_name='$nam_save',  sub_name='$sub_save',  marks='$marks_save',obtainedmarks='$obmarks_save',percentages='$per_save' WHERE no = '$no'")
        or die(mysqli_error());
    echo "Saved!";

    header("Location: view-result.php");
    exit();
}
?>

<h1 class="lead display-4">Update Student Result</h1>
<form class="form-horizontal form-group" method="post">

	<input type="text" name="id" class="form-control" value="<?php echo $std_id ?>"/>
	<input type="text" name="nam" class="form-control" value="<?php echo $std_name ?>"/>
    <input type="text" name="subnam" class="form-control" value="<?php echo $sub_name ?>"/>
	<input type="text" name="marks" class="form-control" value="<?php echo $total_marks ?>"/>
	<input type="text" name="omarks" class="form-control" value="<?php echo $obtained_marks ?>"/>
	<input type="text" name="per" class="form-control" value="<?php echo $per_marks ?>"/>
   	<button class="btn btn-success" type="submit" name="save">Save</button> 
</form>
</body>
</html>