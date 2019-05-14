<?php 
  include('config.php'); 
  include('includes/registration_login.php'); 
  include('includes/head_section.php'); 
  /*$posts = getPublishedPosts(); 
  $topics = getAllTopics();*/
?>
  <title>SurvivEEE | Forum</title>
  <style type="text/css"></style>
</head>
<body>

<style>
a:hover{
  color: #C3696C;
  text-decoration: none;
  font-weight: 600;
}

.jumbotron{
  background-image: linear-gradient(0deg,rgba(38, 38, 38, 0.25), rgba(150, 150, 150, 0.4)), url(images/forum.jpg);
  height: 50%;
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  background-position: center;
  position: relative;
  margin-bottom: 0;
}

.jumbotron-header{
  font-family: 'Fira Sans Condensed';
  font-size: 550%;
  font-weight: 600;
  letter-spacing: 2px;
  text-align: center;
  line-height: .9;
  color: #fff;
  text-shadow: 0px 0px 2px #111;
}

.navbar-expand-sm {
  justify-content: center;
}


.searchbar{
  margin-bottom: auto;
  margin-top: auto;
  height: 40px;
  width: 45%;
  background-color: #404e54;
  padding: 0px 8px;
  display: inline-block;
  }

  .search_input{
  color: white;
  border: 0;
  outline: 0;
  background: none;
  width: 80%;
  line-height: 40px;
  transition: width 0.4s linear;
  }

  .search_icon{
  height: 40px;
  width: 40px;
  float: right;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  color:white;
  }

  .badge-dark, .card, .btn, .form-control{
  border-radius: 0px;
}

.form-control:focus, .form-control:active, .btn:focus{
  outline: none;
  border-color:  #9AAFBB;
  box-shadow: none;
}

.modal-content, .modal-header{
  border-radius: 0px;
}
.modal-header{
  background: #222;
  color: white;
  padding: 1rem;
  position: relative;
  text-decoration: none;
}


.forum-title{
  font-size: 1.4rem;
  font-weight: 600;
}


.latest{
  font-weight: 300;
}

.spacing{
  padding: 2rem 0 4rem; 
}

.padding{
  padding: 2.4rem;
}

.container-fluid{
  padding: 2rem 6rem;
}

.cat-links{
  display: inline-block;
  padding: .9rem;
}

.cat-links a{
  color: #000;
  font-size:1.2rem;
}

@media screen and (max-width: 767px){

  .container-fluid{
    padding: 2rem 3rem;
  }

  .jumbotron-header {
    font-size: 400%;
  }

  .subheader{
    font-size: 180%;
  }

  .container {
    width: 80%;
  }

  .searchbar{
    width: auto;
  }

  .display-none{
    display: none;
  }

}

@media screen and (max-width: 575px){
  .subheader {
    font-size: 150%;
  }

  .cat-links{
    padding: .4rem;
  }

  .padding{
    padding: 1rem;
  }
  
}



@media screen and (min-width: 768px) and (max-width: 992px){
  .display-none{
    display: none;
  }

  .container-fluid{
    padding: 2rem 4rem;
  }

  .cat-links{
    display: inline-block;
    padding: .6rem;
  }
}



</style>


  <div class="wrapper">
    <!-- Navbar -->
     <?php include( ROOT_PATH . '/includes/navbar.php'); ?>

    <div id="content" class="content">
    <div class="jumbotron">
      <div class="container" style="text-align: center;">
        <h2 class="jumbotron-header">Ask Anything</h2>
          <p class="subheader" style="color: #fff; margin: 0px; text-shadow: 0px 0px 2px #111;">Don't be afraid to ask</p>
          <!-- <div class="searchbar">
            <form class="search" action="forum.php" method="POST">
              <input class="search_input" type="text" name="search" placeholder="Search...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
              <button type="submit" name="submit-search">submit</button>
            </form>
          </div>    -->
      </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="question-modal-label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="question-modal">Ask a Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form action="forum.php" method="post">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Ask Your Question</label>
                      <textarea name='question' id="formGroupExampleInput" class='form-control mb-3' placeholder='Your Question Here'></textarea>
                    </div>
                    <label>Select Category</label>
                    <select class="form-control" name="select" id="select">
                      <option value="Midnight SOS">Midnight SOS</option>
                      <option value="Road to GPA 5.0">Road to GPA 5.0</option>
                      <option value="Exams & Tests">Exams & Tests</option>
                      <option value="EEE">EEE</option>
                      <option value="IEM">IEM</option>
                      <option value="Internships & Career Advice">Internships & Career Advice</option>
                      <option value="Others">Others</option>
                    </select>
                  <br>
                  <div class="form-group">
                      <label for="formGroupExampleInput1">Description</label>
                      <textarea name='description' id="formGroupExampleInput1" class='form-control mb-3' placeholder='Any elaboration?'></textarea>
                  </div>
                  <br>
                  <button type="submit" name="submit" class="btn btn-secondary btn-lg btn-block">+ Add</button>
                  <br><br>
                  </form>
              </div>
              </div>
            </div>
          </div>
        </div>


           
    <div class="container-fluid forum">
      <div class="row">
        <?php
              $con = mysqli_connect("localhost","root","", "forum");
              $catsql = "SELECT * FROM topics;";
              $catres = mysqli_query($con, $catsql);
              echo "<div class='col-12 text-center pb-sm-4'>";
              echo"<div class='col-sm-* cat-links '><a href='forum.php'>All</a></div>";
              while($catrow = mysqli_fetch_assoc($catres))
                { ?>
                  <div class="col-sm-* cat-links ">
         <?php   echo "<a href='" . $catrow['slug'] . ".php '>". $catrow['topic'] . "</a></div>";
                }
              echo "</div>";
            ?>


        <div class="col-xs-12 col-lg-8 spacing order-sm-last order-xs-1 order-lg-1 table-responsive">
          <table class="table table-striped main-forum">
            <thead>
              <tr>
                <th scope="col">Topic</th>
                <th scope="col">Category</th>
                <th scope="col">Replies</th>
                <th scope="col">Date Created</th>
                <th scope="col">Latest Reply</th>
              </tr>
            </thead>
            <tbody>
    <?php
            
            $fquery = "select * from forum, topics where forum.topic_id = topics.topic order by id desc";
            $fresult=mysqli_query($con, $fquery);
            
            if(mysqli_num_rows($fresult)>0){
              while($row=mysqli_fetch_assoc($fresult)){

                $comments="select COUNT(message) from comments where post_id=$row[id]";
                $zz=mysqli_query($con, $comments);
                $comment_count=mysqli_fetch_array($zz);
                $latest="select MAX(date) FROM comments where post_id=$row[id] group by post_id order by post_id desc";
                $yy=mysqli_query($con, $latest);
                $latest_comment=mysqli_fetch_array($yy);

                echo "<tr>
                  <td><a href=\"post.php?id=$row[id]\" class=\"text-dark\">$row[question]</a></td>
                  <td>$row[topic]</td>
                  <td>$comment_count[0]</td>
                  <td>$row[time]</td>
                  <td>$latest_comment[0]</td>
                </tr>";

              }
            }
            else
            {
                echo "<tr>
            <td>No Questions Found</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>";

            }
      ?>
            </tbody>
        </table>
      </div>

      <div class="col-xs-12 col-lg-4 padding pt-0  order-lg-2">
        <div class="col-12 p-0 order-sm-first" >
        <?php if (isset($_SESSION['user'])){ ?>

          <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#question-modal" style="width: 100%;">Got a Question?</button> <?php
              }?>
        </div>
        <div class="filter row">
          <div class=" col-md-6 col-lg-12 display-none" >
            
          <h4 class="forum-title text-left mt-4" >Latest Activity</h4>
        <table class="table table-striped table-hover latest mb-4">
          <?php 
            $query = "select * from forum, topics where forum.topic_id = topics.topic";
            $result=mysqli_query($con, $query);
            
            if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_assoc($result)){

                $latest="select MAX(date) FROM comments where post_id=$row[id] group by post_id order by post_id desc limit 5";
                $yy=mysqli_query($con, $latest);
                $latest_comment=mysqli_fetch_array($yy);


                echo "<tr><td><a href=\"post.php?id=$row[id]\" class=\"text-dark\">$row[question]</a>
                <br><small>$row[topic] &nbsp; <br> Last updated: $latest_comment[0]</small></td></tr>";

              }
            }
          ?>
        </table>
        </div>
        <div class="col-md-6 col-lg-12 display-none">
        <h4 class="forum-title text-left mt-4">Trending Topics</h4>
        <table class="table table-striped latest">
          <?php 
            $query = "select * from forum ";
            $result=mysqli_query($con, $query);
            
            if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_assoc($result)){

                $latest="select MAX(date) FROM comments where post_id=$row[id] group by post_id order by post_id desc limit 5 ";
                $yy=mysqli_query($con, $latest);
                $latest_comment=mysqli_fetch_array($yy);


                echo "<tr><td><a href=\"post.php?id=$row[id]\" class=\"text-dark\">$row[question]</a><br><small>comments:
                  $comment_count[0]</small></td></tr>";

              }
            }
          ?>
        </table>
      </div>
      </div>
    </div>
    </div>
  </div>
      <br><br><br>

    <?php include( ROOT_PATH . '/includes/footer.php'); 



// if (isset($_POST['submit-search'])){
//   $search = $_POST['search'];
//   $search = preg_replace("#[^0-9a-z]#i", "", $search);
//   $sql = "select * from forum where question like '%$search%' or description like '%$search' or  topic_id like '%$search%'";
//   $result=mysqli_query($con, $sql);
//     if(mysqli_num_rows($result)>0){
//       while($row=mysqli_fetch_assoc($result)){
//         echo 
//           "<tr>
//             <td><a href=\"post.php?id=$row[id]\" class=\"text-dark\">$row[question]</a></td>
//             <td>$row[topic]</td>
//           </tr>";
//       }  
//     }  else{
//       echo "Sorry, there are no results from your search";
//     }
//     echo "<meta http-equiv='refresh' content='0' ;URL='forum.php'>";
//       exit(0);
// }

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