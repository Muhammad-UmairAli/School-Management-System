<?php include('functions.php') ?> 

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>register</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--
      ===============================================================================================
    -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />
    <!--
      ===============================================================================================
    -->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--
      ===============================================================================================
    -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--
      ===============================================================================================
    -->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--
      ===============================================================================================
    -->
  </head>
  <body>
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button
          type="button"
          class="navbar-toggle collapsed"
          data-toggle="collapse"
          data-target="#navbar"
          aria-expanded="false"
          aria-controls="navbar"
        >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="..\index.html"
          >School Management<span> System</span></a
        >
      </div>
    </div>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('images/bg-01.jpg');"
      >
        <div class="wrap-login100 p-t-30 p-b-50">
          <span class="login100-form-title p-b-41"> Account Sign up </span>
          <form
            class="login100-form validate-form p-b-33 p-t-5"
            method="post"
            action="register.php"
          >
            <?php echo display_error(); ?>

            <div
              class="wrap-input100 validate-input"
              data-validate="Enter username"
            >
              <input
                class="input100"
                type="text"
                name="username"
				placeholder="User name"
				value="<?php echo $username; ?>"
              />
              <span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div>
      <div
              class="wrap-input100 validate-input"
              data-validate="Enter Registration Id"
            >
              <input
                class="input100"
                type="text"
                name="registration_id"
				placeholder="Registration"
				value="<?php echo $registration; ?>"
              />
              <span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div>
			<div
              class="wrap-input100 validate-input"
              data-validate="Enter Email"
            >
              <input
                class="input100"
                type="text"
                name="email"
				placeholder="Email"
				value="<?php echo $email; ?>"
              />
              <span class="focus-input100" data-placeholder="&#xe82a;"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Enter password"
            >
              <input
                class="input100"
                type="password"
                name="password_1"
                placeholder="Password"
              />
              <span class="focus-input100" data-placeholder="&#xe80f;"></span>
			</div>
			<div
              class="wrap-input100 validate-input"
              data-validate="Enter password"
            >
              <input
                class="input100"
                type="password"
                name="password_2"
                placeholder=" Confirm Password"
              />
              <span class="focus-input100" data-placeholder="&#xe80f;"></span>
            </div>

            <div class="container-login100-form-btn m-t-32">
              <button type="submit" name="register_btn" class="login100-form-btn">
                Sign Up
              </button>
            </div>

            <div>
			Already a member? <a href="login.php">Sign in</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--
      ===============================================================================================
    -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--
      ===============================================================================================
    -->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--
      ===============================================================================================
    -->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--
      ===============================================================================================
    -->
    <script src="vendor/select2/select2.min.js"></script>
    <!--
      ===============================================================================================
    -->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--
      ===============================================================================================
    -->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--
      ===============================================================================================
    -->
    <script src="js/main.js"></script>
  </body>
</html>
