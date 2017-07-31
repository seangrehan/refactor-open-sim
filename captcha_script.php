[sean@cd captcha]$ cat captcha.php
<?php session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

function _generateRandom($length=6)
{
        $_rand_src = array(
                array(48,57) //digits
                , array(97,122) //lowercase chars
//              , array(65,90) //uppercase chars
        );
        srand ((double) microtime() * 1000000);
        $random_string = "";
        for($i=0;$i<$length;$i++){
                $i1=rand(0,sizeof($_rand_src)-1);
                $random_string .= chr(rand($_rand_src[$i1][0],$_rand_src[$i1][1]));
        }
        return $random_string;
}

$im = @imagecreatefromjpeg("captcha.jpg");
$rand = _generateRandom(3);
$_SESSION['captcha'] = $rand;
ImageString($im, 5, 2, 2, $rand[0]." ".$rand[1]." ".$rand[2]." ", ImageColorAllocate ($im, 0, 0, 0));
$rand = _generateRandom(3);
ImageString($im, 5, 2, 2, " ".$rand[0]." ".$rand[1]." ".$rand[2], ImageColorAllocate ($im, 255, 0, 0));
Header ('Content-type: image/jpeg');
imagejpeg($im,NULL,100);
ImageDestroy($im);
?>
###
[sean@cd captcha]$ cat captcha_demo.php
<html>
<head>
<title>CAPTCHA Demo</title>
</head>
<body>
<form method="post" action="captcha_script.php">
<table bgcolor="#CCCCCC">
<tr><th>Contact us (Post new message):</th></tr>
<tr><td><textarea cols="30" rows="5" name="message"></textarea></td></tr>
<tr><td align="center">CAPTCHA:<br>
        (antispam code, 3 black symbols)<br>
        <table><tr><td><img src="captcha.php" alt="captcha image"></td><td><input type="text" name="captcha" size="3" maxlength="3"></td></tr></table>
</td></tr>
<tr><th><input type="submit" value="Submit"></th></tr>
</table>
</form>
</body>
</html>
###
[sean@cd captcha]$ cat captcha_script.php
<!-- captcha_script.php -->
<?php session_start() ?>
<HTML>
<HEAD>
<TITLE>Browser Test PHP Script</TITLE>
</HEAD>
<BODY>
<?php
if($_SESSION["captcha"]==$_POST["captcha"])
{
    echo "CAPTHCA is valid - proceed to display registered users page, save to database, send e-mail etc.";
}
else
{
    echo "CAPTCHA is invaild try again";
}
?>
</BODY>
 