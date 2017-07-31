[sean@cd session_new]$ cat logout.php
 <?php
 session_start();
 unset($_SESSION['user_logged_in']);
 ?>
 <html>
 <body>
<p> You have successfully logged out</p>
<p> Would you like to <a href="main_login.php">login</a> again?
 </body>
 </html>