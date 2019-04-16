<nav id="sidebar" class="sidebar">
  <button type="button" id="sidebar-btn" class="sidebar-btn">
    <span></span>
    <span></span>
    <span></span>
  </button>



<!--   <a href="index.php" title="EEE Student Guide">
    <h1 class="logo"><a tabindex="2" accesskey="1" href="index.php"><img src="images/NTU-logo.png" alt="ntu-logo"></a> <span class="alt-logo">survivEEE</span></h1>
  </a> -->

  <ul id="navigation" class="list-unstyled components navigation">
    <?php if (isset($_SESSION['user'])){?>
      <li style="color:white;">Welcome  <?php echo $_SESSION['user']['username']; ?></li>
    <?php } ?>
    <li><a href="index.php" >Home</a></li>
    <li><a href="#guides" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Guides</a>
      <ul class="collapse" id="guides">
        <li><a href="general.html" >General</a></li>
        <li><a href="exam.html" >Exam</a></li>
        <li><a href="stars.html" >Stars</a></li>
      </ul>
    </li>
    <li><a href="http://maps.ntu.edu.sg/maps" >Campus Map</a></li>
    <li><a href="forum.php" class="hvr-underline-from-center">Forum</a></li>
    <?php if (isset($_SESSION['user'])){?>
     <li><a href="https://ntuvibe.com/scheduler" >Scheduler</a></li>
     <li><a href="calculator.php" >Calculator</a></li>
	<li><a href="logout.php"><button class="btn btn-header btn-login">Log out</button></a></li>
	
  <?php }else{ ?>
  	
  	<li><a href="register.php">Register </a></li>
  	<li><a href="login.php" ><button class="btn btn-header btn-login">Login</button></a></li>
  	
  <?php } ?>
  </ul>

  <div id="logo" class="social-media">
    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  </div>
</nav>