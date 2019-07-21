<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #343A40;
	}
	button[name=register_btn] {
		background: #003366;
	}
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
      
      <li class="nav-item active">
        <a class="nav-link" href="create_user.php">Add users</a>
	  
    </ul>
    <li class="nav">
	<a class="btn btn-light" href="home.php?logout='1'"><h5><i>Log out</i></h5></a>
	</li>
  </div>
</nav>

	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
<div class="container" style="margin-top:1%">
	<div class="row">
      <div class="col"><div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Student</h4>
                <h6 class="card-subtitle text-muted">Record</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
				<a class="btn btn-outline-dark" href="record.php">+Add</a>
				<a class="btn btn-outline-dark" href="view-records.php">View</a>
            </div>
	</div></div>
      <div class="col" ><div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Student</h4>
                <h6 class="card-subtitle text-muted">fee</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
				<a class="btn btn-outline-dark" href="fee.php">+Add</a>
				<a class="btn btn-outline-dark" href="view-fee.php">View</a>
            </div>
	</div></div>
      <div class="col" ><div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Student</h4>
                <h6 class="card-subtitle text-muted">Attendence</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
				<a class="btn btn-outline-dark" href="attendence.php">+Add</a>
				<a class="btn btn-outline-dark" href="view-attendence.php">View</a>
            </div>
	</div></div>
	</div>
	<div class="row">
      <div class="col"   style="margin-left:10%" ><div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Student</h4>
                <h6 class="card-subtitle text-muted">Library Status</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
				<a class="btn btn-outline-dark" href="library.php">+Add</a>
				<a class="btn btn-outline-dark" href="view-library.php">View</a>
            </div>
	</div></div>
      <div class="col"  ><div class="card" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Student</h4>
                <h6 class="card-subtitle text-muted">Result</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
				<a class="btn btn-outline-dark" href="result.php">+Add</a>
				<a class="btn btn-outline-dark" href="view-result.php">View</a>
            </div>
	</div></div>
	</div>
</div>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>