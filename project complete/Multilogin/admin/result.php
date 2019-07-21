<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
               body {
                background-image: url("back.jpg");
                background-repeat: repeat;
                background-attachment: fixed;
                }
    </style>
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

<div class="container">
        <div class="row ">
            <div class="col-sm-4 "></div>
            <div class="col-sm-4">
                <div class=" card mt-1 loginbox ">
                    <div class="card-header text-dark ">STUDENT Result</div>
                    <div class="card-body">
                        <form class="text-white" action="result.php" method="POST">
                            <div class="form-group">
                                <label for="name" class="text-dark">Student ID</label>
                                <input class="form-control text-dark" type="text" id="name" placeholder="Enter Student ID" name="id" maxlength="12" required>
							</div>
                            <div class="form-group">
                                <label for="name" class="text-dark">Student Name</label>
                                <input class="form-control text-dark" type="text" id="name" placeholder="Enter Student name" name="nam" required>
							</div>
							<div class="form-group">
                                <label for="name" class="text-dark">Subject Name</label>
                                <input class="form-control text-dark" type="text" id="name" placeholder="Enter Subject Name" name="subnam" required>
							</div>
							<div class="form-group">
                                <label for="name" class="text-dark">Total Marks</label>
                                <input class="form-control text-dark" type="text" id="name" placeholder="Enter Marks" name="marks" required>
							</div>
							<div class="form-group">
                                <label for="name" class="text-dark">Obtained Marks</label>
                                <input class="form-control text-dark" type="text" id="name" placeholder="Enter Obtained Marks" name="omarks" required>
							</div>
							<div class="form-group">
                                <label for="name" class="text-dark">Percentage</label>
                                <input class="form-control text-dark" type="text" id="name" placeholder="Enter Percentage" name="per" required>
							</div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" value="Add" name="enter" />
							</div>
                    </form>
                </div>
                <div class="col-sm-4 "></div>
       </div>
    </div>
</div>


<?php
$con = mysqli_connect("localhost", "root", "", "multi_login");
if (isset($_POST['enter'])) {

    $stu_id = $_POST['id'];
    $stu_name = $_POST['nam'];
    $sub_name = $_POST['subnam'];
    $marks = $_POST['marks'];
    $omarks = $_POST['omarks'];
    $percentage = $_POST['per'];


    $sql = "INSERT INTO result (registration_id,std_name,sub_name,marks,obtainedmarks,percentageS) VALUES ('$stu_id','$stu_name','$sub_name','$marks','$omarks','$percentage')";
    $result = $con->query($sql);

}
?>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   
</body>
</html>