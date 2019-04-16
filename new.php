<?php  
  include('config.php');
  include('post_functions.php'); 
  include('includes/registration_login.php');
  include('includes/head_section.php'); 
?>
  <title>SurvivEEE | New Question</title>
   <style>
    /*------------------ NAVIGATION ---------------------*/
    .sidebar {
      width: 0px;
      padding: 0px;
    }

    .sidebar.active {
      width: 200px;
      padding: 30px;
      margin-left: 0px;
      background-color: #222;
    }

    .logo, .social-media, .navigation{
      display: none;
    }

    .logo.active, .sidebar .navigation.active{
      display: inline-block;
    }

    .social-media.active{
      display: flex;
    }
    .content {
      width: 100%;
    }

    .content.active {
      width: calc(100% - 200px);
    }

    </style>
</head>
<body>
    <div class="wrapper">
    <!-- Navbar -->
    <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
    <div id="content" class="content">
      <h1 class="display-4">Ask a Question</h1><br>
      <div class="container">
          <form action="new.php" method="post">
            <div class="form-group">
              <label for="formGroupExampleInput">Ask Your Question</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Question Here" name="question">
            </div>
            <label>Select Category</label>
            <select class="form-control" name="select" id="select">
              <option value="1">Midnight SOS</option>
              <option value="2">Road to GPA 5.0</option>
              <option value="3">Exams & Tests</option>
              <option value="4">EEE</option>
              <option value="5">IEM</option>
              <option value="6">Internships & Career Advice</option>
              <option value="7">Others</option>
            </select>
          <br>
          <div class="form-group">
              <label for="formGroupExampleInput1">Description</label>
              <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Any elaboration?" name="description">
          </div>
          <br>
          <button type="submit" name="submit" class="btn btn-secondary btn-lg btn-block">+ Add</button>
          <br><br>
          </form>
      </div>

<?php include( ROOT_PATH . '/includes/footer.php'); 


  if(isset($_POST['submit'])){
    $qu = $_POST['question'];
    $se = $_POST['select'];
    $de = $_POST['description'];
     if($qu=='' || $se=='' || $de==''){
         echo "<script>alert('Please Enter all the Fields')</script>";
     }
     else{
      $con = mysqli_connect("localhost","root","");
      mysqli_select_db($con,"forum");
      date_default_timezone_set('Asia/Singapore');                                          //TIME
      $timestamp = time();
      $date_time = date("d-m-Y (D) H:i:s", $timestamp);
      $insert_query = "insert into forum (question, description, topic_id, time) values ('$qu','$de','$se','$date_time')";

      $res=mysqli_query($con, $insert_query);

      echo "<meta http-equiv='refresh' content='0' ;URL='forum.php'>";
      exit(0);
    }
   }
?>



