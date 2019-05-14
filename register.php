<?php  
  include('config.php'); 
  include('includes/registration_login.php');
  include('includes/head_section.php'); 
?>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <title>SurvivEEE | Register</title>
</head>
<body>
  <div class="wrapper">
    <!-- Navbar -->
    <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
    <div id="content" class="content">
      <div class="login">
          <h1 class="register-text">register</h1>
      <div class="row padding">
        <div class="contact-text row-group col-xs-12 col-lg-6">
          <h3>Register an account today for FREE to enjoy extra features.</h3>
        </div>
        <div class="row-group col-xs-12 col-lg-5 padding-register">
          <form method="post" action="register.php"class="contact-form form">
            <?php include(ROOT_PATH . '/includes/errors.php') ?>
              <div class="form-group pb-2">
                <input type="text" class="form-line" name="username" value="<?php echo $username; ?>"placeholder="Username">
              </div>
            <div class="form-group pb-2">
              <input type="email" class="form-line" name="email" value="<?php echo $email ?>" placeholder="Email">
            </div>
            <div class="form-group pb-2">
              <input type="password" class="form-line" name="password_1" placeholder="Password">
            </div>
            <div class="form-group pb-3">
              <input type="password" class="form-line" name="password_2" placeholder="Password Confirmation">
            </div>
            <button type="submit" class="btn btn-header btn-login" name="reg_user">Register</button>
            <div class="form-group">
              <br><p>Already a member?</p>
              <a href="login.php" class="links">Sign in</a>    
            </div>
          </form>
        </div>
        <div class="col-md-1"></div> 
      </div>
    </div>
  <?php include( ROOT_PATH . '/includes/footer.php'); ?>