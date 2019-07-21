<?php $con = mysqli_connect("localhost", "root", "", "multi_login"); ?>
<!DOCTYPE html>
<html>
<head>
<title>View Records</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
	<link rel="stylesheet" href="css/form.css">
	
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

<table class="table table-bordered   table-hover table-striped">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>ID</th>
			<th>Email</th>
			<th>Address</th>
			<th colspan="2" style="text-align:center;">Action</th>
		</tr>
		</thead>
    <tbody>
			<?php


    $result = mysqli_query($con, "SELECT * FROM record");

    while ($test = mysqli_fetch_array($result)) {
        $no = $test['no'];
        echo "<tr align='center'>";
        echo "<td><font color='black'>" . $test['no'] . "</font></td>";
        echo "<td><font color='black'>" . $test['name'] . "</font></td>";
        echo "<td><font color='black'>" . $test['registration_id'] . "</font></td>";
        echo "<td><font color='black'>" . $test['email'] . "</font></td>";
        echo "<td><font color='black'>" . $test['address'] . "</font></td>";
        echo "<td> <a href ='edit-records.php?no=$no'><button class='btn btn-success fas fa-edit'>Edit</button></a></td>";
        echo "<td> <a href ='delete-records.php?no=$no'>
    <button class='btn btn-danger fas fa-trash-alt'>.Delete</button></a></td>";
        echo "</tr>";
    }
    ?>
  
       </tbody>
</table>

</body>
</html>
