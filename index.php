<?php  
  include('config.php'); 
  include('includes/registration_login.php');
  include('includes/head_section.php'); 
?>
  <title>SurvivEEE | Home</title>
  <style type="text/css"></style>
</head>
<body>
  <div class="wrapper">
  <!-- Navbar -->
  <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
    <div id="content" class="content">
      <div class="home-landing" id="home">
        <div class="landing-text-bg">
          <h1>surviv<br>EEE</h1>
            <h3>The ultimate Freshman guide</h3>
        </div>
      </div>
    <div class="content1 padding" id="c-types">
      <div class="event-header" id="guides">
        <h3 class="header pt-3">Guides</h3>
        <h4 class="g-subheader">Entering your first year without a clue about everything? Not to worry, help is on the way! <br>Check these out!</h4>
      </div>
      <div class="cols pb-4">
        <div class="c-col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(images/stars-cover.jpg)">
              <div class="inner">
                <h4>STARS</h4>
              </div>
            </div>
            <div class="back">
              <div class="inner" id="inner">
                <a href="stars.html">
                  <p>No, this isn't a guide for the ones in the sky. All you need to plan a good timetable for the upcoming year is right here.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="c-col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image:url(images/exam-cover.jpg)">
              <div class="inner">
                <h4>Exam</h4>
              </div>
            </div>
            <div class="back">
              <div class="inner" id="inner">
                <a href="exam.html">
                  <p>Feeling the Stress? Not to worry, here's something better than chicken essence.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="c-col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(images/general-cover.jpg)">
                <div class="inner">
                  <h4>General</h4>
                </div>
            </div>
            <div class="back">
              <div class="inner" id="inner">
                <a href="general.html">
                  <p>What you need to know for your first year.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!--About-->
    <div class="intro-bg padding"id="about">
      <div class="title">
        <h3 class="heading">survivEEE</h3>
        <div style="clear:both"></div>
        <h3 class="heading-duplicate">About Us</h3>
      </div>
      <div style="clear:both"></div>
      <div class="about padding mb-4">
        <p>SurvivEEE is a one-stop platform dedicated to help NTU EEE students better cope with the stresses of university life. As a freshman, there are a ton of things that you’re still hazy about. Fret not, this survival guide is made just for you.<br><br></p>
        <p> Have any specific questions? Don’t be afraid to ask. The forum allows you to not only voice your queries but also learn from alumnus and professors who share their ideas, resources and experiences. This way a close knit EEE community that freely gives and receives is created.  </p>
      </div>
       <div style="clear:both"></div>
    </div>


  

<!-- Footer -->
  <?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->