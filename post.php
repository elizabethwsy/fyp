<?php  
  include('config.php');
  include('post_functions.php'); 
  include('includes/registration_login.php');
  include('includes/head_section.php'); 
?>
  <title>SurvivEEE | Forum</title>
   <style>
    /*------------------ NAVIGATION ---------------------*/

a:hover{
  text-decoration: none;
}

.badge-dark, .card, .btn, .form-control{
  border-radius: 0px;
}

.form-control:focus, .form-control:active{
  outline: none;
  border-color:  #9AAFBB;
  box-shadow: none;
}

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


.jumbotron{
  background-image: linear-gradient(0deg,rgba(38, 38, 38, 0.25), rgba(150, 150, 150, 0.4)), url(images/forum.jpg);
  height: 20%;
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  background-position: center;
  position: relative;

}

.jumbotron-header{
  font-family: 'Fira Sans Condensed';
  font-size: 300%;
  font-weight: 400;
  letter-spacing: 2px;
  text-align: left;
  line-height: .9;
  color: #fff;
  text-shadow: 0px 0px 2px #111;
  padding-left: 2rem;
}

.btn-crud{
  background-color: transparent;

}

.btn-edit, .btn-edit:hover{
  margin-top: 8px; 
  color: #000;
}

/*.right-sidebar{
  padding-left: 3%;
}
*/
.right-sidebar h3{
  font-size: 1.4rem;
  font-weight: 600;
}
.post-content{
  padding-right: 4%;
}

.div-box{
  background-color: #9AAFBB;
  color: #fff;
  padding:.5rem;
}

.contacts, .related{
  background-color: #d7e3ea;
  padding:1rem;
  line-height: 1.4;
  overflow-wrap: break-word;
}

.contacts li{
  margin-bottom: 1rem;
  font-weight: 300;
}


.related{
  background-color: #7eadb4;
}


.searchbar{
  margin-bottom: 2rem;
  margin-top: auto;
  height: 40px;
  width: 100%;
  background-color: #353b48;
  border-radius: 30px;
  padding: 0px 8px;
  display: inline-block;
  }

  .search_input{
  color: white;
  border: 0;
  outline: 0;
  background: none;
  width: 82%;
  padding: 0 10px;
  line-height: 40px;
  transition: width 0.4s linear;
  }

  .search_icon, .search_icon:hover{
    color: #ccc;
    font-weight: 300;
  }

    </style>
</head>
<body>
<?php
  $con = mysqli_connect("localhost","root","");
  mysqli_select_db($con,"forum");

  if(isset($_GET['id'])){
  $question_id = $_GET['id'];
  $insert_query = "select * from forum where id='".$question_id."'";
  $res=mysqli_query($con, $insert_query);
  $row=mysqli_fetch_array($res);
  $question=$row['question'];
  $description=$row['description'];
  $q_topic=$row['topic_id'];
  $time=$row['time'];?>
  <div class="wrapper">
  <!-- Navbar -->
  <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
  <div id="content" class="content">
  <div class="jumbotron">
    <div class="container">
      <h1 class="jumbotron-header">Home/ <?php echo "$q_topic"?></h1>
    </div>
  </div>

  <div class="container padding">
    <div class="row">
      <div class="col-md-9 col-sm-12 post-content">
        <div class='text-left'><a href='forum.php' style='color: #c3696c;'>&larr; Back to Forum</a></div>
    <?php echo "<span class='badge badge-dark p-1'>$q_topic</span>
          <div class='list-group'>
            <div class='d-flex w-100 justify-content-between'>
              <h5 class='display-4'>$question</h5>
                <small>$time</b></small>
            </div>
            <h5><p class='mb-1'>$description</p></h5>
          </div>
          <br>
          <br>";

      if (isset($_SESSION['user'])){ 
        echo"
          <div class='card bg-light'  style='border:0;'>
          <div class='card-body'>
          <form action='' method='post'>
            <div class='comment mb-2'>
              <input type='hidden' name='userid' value='".$_SESSION['user']['username']."'>
              <input type='hidden' name='date' value='".date('d-m-Y H:i:s')."'>
              <textarea name='message' class='form-control mb-3' placeholder='Enter comment'></textarea>
              <button class='btn btn-dark' type='submit' name='submit'>Comment</button>
            </div>
          </form>
          </div>
          </div>";
      } else {
        echo "<div class='div-box mb-2 text-center' style='background-color: #c3696c;'>You need to login first to comment</div>";
      } 

      $insert_query1 = "select * from comments where post_id='".$question_id."'";
      $res1=mysqli_query($con, $insert_query1);
      if(mysqli_num_rows($res1)>0){
         while($row1=mysqli_fetch_assoc($res1)){
          $comment_id = $row1['comment_id'];
          echo "
          <div class='bg-light'>
          <div class='card-body'>
          <div class='row no-gutters'>
          <div class='col-12 p-1'><strong>";
          echo $row1['userid']."</strong><small style='float:right;'>";
          echo $row1['date']. "</small><br><br>";
          echo $row1['message']. "</div>";

      if (isset($_SESSION['user'])){
        if($_SESSION['user']['username'] == $row1['userid']){
          echo "<form class='delete-form' method='POST' action='".deleteComments($con)."'>
            <input type ='hidden' name='comment_id' value ='".$row1['comment_id']."'>
            <button class='btn btn-crud' type='submit' name='comment_delete'><small>Delete  |</small></button>
          </form>";
        if ($isEditingUser === true && $row1['comment_id'] == $_GET['edit-admin']){
            echo "<div class='update-comment col-12'><form class='edit-form' method='POST' action=''>
            <button class='btn btn-crud' type='submit' name='update_admin'><small>Update </small></button>
            <input type ='hidden' name='comment_id' value ='".$row1['comment_id']."'>
            <input type ='hidden' name='date' value ='".$row1['date']."'>
            <textarea name='message' class='form-control mb-3'>".$row1['message']."</textarea>
          </form></div>";
        } else{?>
            <a class='btn-edit'  href="post.php?id=<?php echo $question_id ?>&edit-admin=<?php echo $row1['comment_id'] ?>"><small>Edit</small>
            </a>
    <?php  }
        } else { 
         echo "<br>

            <div class='bg-light col-12'><div class='card-body'>
            <form action='' method='post'>
              <div class='comment-reply mb-2'>
                <input type='hidden' name='userid' value='".$_SESSION['user']['username']."'>
                <input type='hidden' name='comment_id' value='".$row1['comment_id']."'>
                <input type='hidden' name='date' value='".date('d-m-Y H:i:s')."'>
                <textarea name='message' class='form-control mb-3' placeholder='Enter comment'></textarea>
                <button class='btn btn-dark' type='submit' name='reply_submit'>Submit Reply</button>
              </div>
            </form>
            </div></div>";
          }
        }

        $query2 = "select * from replies where comment_id='$comment_id' order by date desc";
        $replies = mysqli_query($con, $query2);
        if(mysqli_num_rows($replies)>0){
          while($reply=mysqli_fetch_assoc($replies)){ 
            echo "<div class='col-12 card bg-light ' style='border:0;'>
            <div class='card-body'>
            <div class='row no-gutters'>
            <div class='col-12'><strong>";
            echo $reply['userid']."</strong><small style='float:right;'>";
            echo $reply['date']. "</small><br><br>";
            echo $reply['message']. "</div></div></div></div>";
          }
        }
        echo "<hr style='width: 100%; height: 2px;border-top: 1px solid #aaa;'>";
        echo"</div></div></div>";
       }
      echo"<div class='text-center div-box mt-3'>end of comments</div> "; 
        }                                                                                       
        else{
          if (isset($_SESSION['user'])){
            echo "<div class='container div-box mt-3'><center>No Comments posted</center></div>";
          }
        }
      ?>
  </div>
    <div class="col-md-3 col-sm-12 right-sidebar">
      <div class="searchbar">
        <input class="search_input" type="text" name="" placeholder="Search...">
        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
      </div>
      <div class="related mb-4">
      <h3>Similar Questions:</h3>
      <table class="table table-hover latest mb-0">
    <?php $query = "select * from forum where topic_id = '".$q_topic."'";
          $result=mysqli_query($con, $query);
          
          if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
              echo "<tr><td><a href=\"post.php?id=$row[id]\" class='text-dark'>$row[question]</a>
              </td></tr>";
            }
          }
    ?>
        </table>
      </div>
      <div class="contacts">
        <h3>Key Contacts:</h3>
        <ul class="list-unstyled">
          <li><strong>Undergraduate Programme Office (UPO)</strong>
              <br>eeeundgrad@ntu.edu.sg 
              <br>6790 6364 / 6790 6014
          </li>
          <li><strong>Undergraduate Matters</strong>
              <br>​Foo Mong Keow, Thomas
                  emkfoo@ntu.edu.sg
              <br>6513 8276
          </li>
        </ul>
      </div>
    </div>
    </div>
  </div>
  <!-- Footer -->
  <?php include( ROOT_PATH . '/includes/footer.php'); 

}

if(isset($_POST['submit'])){
  $message = $_POST['message'];
  if($message==''){
         echo "<script>alert('Please enter a comment.')</script>";
     }
  else{
      date_default_timezone_set('Asia/Singapore');                                          
      $timestamp = time();
      $date_time = date("d-m-Y H:i:s", $timestamp);
      $userid= $_POST['userid'];
      $ins_query = "insert into comments (post_id, userid, date, message) values ('$question_id','$userid','$date_time', '$message')";
      $result=mysqli_query($conn, $ins_query);

      echo  "<meta http-equiv='refresh' content='0'>";
      exit(0);
  }
}

if (isset($_POST['update_admin'])) {
  updateAdmin($_POST);
}

function updateAdmin($request_values){
  global $conn, $errors, $date, $isEditingUser, $admin_id, $message, $question_id;
  // get id of the admin to be updated
  $admin_id = $request_values['comment_id'];
  // set edit state to false
  $isEditingUser = false;

  $message = $request_values['message'];
  $date = $request_values['date'];
  // register user if there are no errors in the form
  if($message==''){
         echo "<script>alert('Please enter a comment.')</script>";
     }
  else{

    $query = "UPDATE comments SET message='$message', date='$date' WHERE comment_id=$admin_id";
    mysqli_query($conn, $query);

    echo "<script>alert('Please enter a comment.' $question_id)</script>";
    echo  "<meta http-equiv='refresh' content='0; url=post.php?id=$question_id'>";
    exit(0);
  }
}



  ?>
  <!-- // Footer -->
