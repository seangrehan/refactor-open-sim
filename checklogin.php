[sean@cd session_new]$ cat checklogin.php
<?php
session_start();

 # connect to the database
        include 'connect.php';

$tbl_name="opensim"; // Table name

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
 $email = stripslashes($email);
 $password = stripslashes($password);
 $email = mysql_real_escape_string($email);
 $password = mysql_real_escape_string($password);
 
 $sql="SELECT * FROM opensim WHERE email='$email' and password='$password'";
 $result=mysql_query($sql);

// Mysql_num_row is counting table row
 $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

  if($count==1){

// Record that the user is logged in and redirect to file "login_success.php"
  $_SESSION['user_logged_in'] = "1";
  header("location:loginsuccess.php");
  }
  else {
  echo "Wrong Username or Password";
  }
 ?>
