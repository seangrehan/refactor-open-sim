[sean@cd session_new]$ cat connect.php
<?php

# PHP to MySQL connection script

#  connect to MySQL
$conn=@mysql_connect("localhost", "****", "****")
                                        or die("Err:Conn");

# select the specified database
$rs=@mysql_select_db("sean", $conn)
                                        or die("Err:Db");
?>
 