<?php
include('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
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
	<a class="btn btn-light" href="index.php"><h5><i>back</i></h5></a>
	</li>
  </div>
</nav>


<table class="table table-bordered table-dark  table-hover table-striped">
	<thead>
		<tr align='center'>
            <th>Username</th>
            <th>ID</th>    
			<th>Email</th>
			<th>Address</th>
		</tr>
		</thead>
    <tbody>
            <?php
            $con = mysqli_connect("localhost", "root", "", "multi_login");
            $id = $_SESSION['registrationID'];
            $query = "SELECT no,name,registration_id,email,address FROM record WHERE registration_id = '$id'";
            $result = mysqli_query($con, $query);

            while ($test = mysqli_fetch_assoc($result)) {
                $no = $test['no'];
                echo "<tr align='center'>";
                echo "<td><font color='white'>" . $test['name'] . "</font></td>";
                echo "<td><font color='white'>" . $test['registration_id'] . "</font></td>";
                echo "<td><font color='white'>" . $test['email'] . "</font></td>";
                echo "<td><font color='white'>" . $test['address'] . "</font></td>";
                echo "</tr>";
            }

            ?>
  
       </tbody>
</table>






<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   
</body>
</html>