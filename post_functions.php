<?php 
// Admin user variables
$admin_id = 0;
$isEditingUser = false;
$username = "";
$email = "";


if(isset($_POST['reply_submit'])) {
	$message = $_POST['message'];
	if($message==''){
	       echo "<script>alert('Please enter a comment.')</script>";
	   }
	else{
	    date_default_timezone_set('Asia/Singapore');                                          
	    $timestamp = time();
	    $date_time = date("d-m-Y H:i:s", $timestamp);
	    $userid= $_POST['userid'];
	    $comment_id = $_POST['comment_id'];
	    $ins_query = "insert into replies (comment_id, userid, date, message) values ('$comment_id','$userid','$date_time', '$message')";
	    $result=mysqli_query($conn, $ins_query);
	    echo  "<meta http-equiv='refresh' content='0'>";
	    exit(0);
	}
}



// if user clicks the Edit admin button
if (isset($_GET['edit-admin'])) {
	$isEditingUser = true;
	$admin_id = $_GET['edit-admin'];
	editAdmin($admin_id);
}


/* * * * * * * * * * * * * * * * * * * * *
* - Takes admin id as parameter
* - Fetches the admin from database
* - sets admin fields on form for editing
* * * * * * * * * * * * * * * * * * * * * */
function editAdmin($admin_id)
{
	global $conn, $date, $isEditingUser, $admin_id, $message;
	

	$sql = "SELECT * FROM comments WHERE comment_id=$admin_id LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$comment = mysqli_fetch_assoc($result);

	// set form values ($date and $message) on the form to be updated
	$message = $comment['message'];
	$date = $comment['date'];
}


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
* - Returns all admin users and their corresponding roles
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function getAdminUsers(){
	global  $roles;
	$sql = "SELECT * FROM users WHERE role IS NOT NULL";
	$result = mysqli_query($conn, $sql);
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $users;
}



function deleteComments($conn){
  if (isset($_POST['comment_delete'])){
    $comment_id = $_POST['comment_id'];
    $query = "DELETE FROM comments WHERE comment_id='$comment_id'";
    $result=mysqli_query($conn, $query);
    echo  "<meta http-equiv='refresh' content='0'>";
    exit(0);
  }
}


?>