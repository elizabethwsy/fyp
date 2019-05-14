<?php  
  include('config.php'); 
  include('includes/registration_login.php');
  include('includes/head_section.php'); 
?>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <title>SurvivEEE | Login</title>
</head>
<body>
  <div class="wrapper">
    <!-- Navbar -->
    <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
    <div id="content" class="content">
      <div class="login">
          <h1 class="register-text">sign&nbsp;in</h1>
      <div class="row padding">
        <div class="contact-text row-group col-xs-12 col-lg-6">
          <h3>Sign in to your account to gain access to  extra features.</h3>
        </div>
        <div class="row-group col-xs-12 col-lg-5 padding-register">
          <form method="post" action="login.php"class="contact-form form">
            <?php include(ROOT_PATH . '/includes/errors.php') ?>
              <div class="form-group pb-2">
                <input type="text" class="form-line" name="username" value="<?php echo $username; ?>"placeholder="Username">
              </div>
            <div class="form-group pb-2">
              <input type="password" class="form-line" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-header btn-login py-2" name="login_btn">Login</button>
            <div class="form-group">
              <br><p>Not yet a member?</p>
              <a href="register.php" class="links">Sign up</a>    
            </div>
          </form>
        </div>
        <div class="col-md-1 display-none"></div> 
      </div>
    </div>
<!-- Footer -->
  <?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->