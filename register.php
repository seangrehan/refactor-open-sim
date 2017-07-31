<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<title>OpenSim - Register</title>
			<link href="css/twoColFixLtHdr.css" rel="stylesheet" type="text/css" />
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			<script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
		</head>

<body class="opensimbody">
	<div class="opensimcontainer">
		<div class="header">
			<img src="images/header.jpg" alt="Insert Logo Here" name="Insert_logo" width="1024" height="51" style="background-color: #8090AB; display:block;" />
			&nbsp;
		<nav>
      		<ul class="nav nav-tabs">
        		<li><a href="index.php">OpenSim Home</a></li>
        		<li><a href="simulator.php">Simulators</a></li>
        		<li class="dropdown"><a href="" data-toggle="dropdown" class="dropdown-toggle">Login/Register<b class="caret"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="login.php">Login</a></li>
            			<li><a href="register.php">Register</a></li>
          			</ul>
        		</li>
      		</ul>
		</nav>
		</div>
		<div style="background-image:url('images/body1.jpg');height:420px;">
		&nbsp;
		
		<div class="sidebar1">
			<h2 class="opensimh2">Links</h2>
		</div>
		
		<div class="content">
			<h1 class="opensimh1">Register for OpenSim</h1>
				<form action="registerform.php" name="myform" id="myform" method="post">
					<h3 class="opensimh2">Firstname: <input type="text" name="firstname"></h3>
					<h3 class="opensimh2">Lastname: <input type="text" name="lastname"></h3>
                    <h3 class="opensimh2">Student ID: <input type="text" name="studentid"></h3>
                    <h3 class="opensimh2">Email: <input type="text" name="email"></h3>
                    <h3 class="opensimh2">Password: <input type="text" name="password"></h3>
					<h3 class="opensimh2">
                    	<input type="reset" name="reset" id="reset" value="Reset">
                        <input type="submit" name="submit" id="submit" value="Submit">
                    </h3>
					&nbsp;
					<div id="myform_errorloc" class="opensimp"></div>
				</form>
					<script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
						var frmvalidator  = new Validator("myform");
						frmvalidator.EnableOnPageErrorDisplaySingleBox();
						frmvalidator.EnableMsgsTogether();
 
						frmvalidator.addValidation("firstname","req","Please enter your First Name");
						frmvalidator.addValidation("firstname","maxlen=20",	"Max length for FirstName is 20");
						frmvalidator.addValidation("firstname","alpha_s","Name can contain alphabetic chars only");
  	
						frmvalidator.addValidation("lastname","req","Please enter your Last Name");
						frmvalidator.addValidation("lastname","maxlen=20","For LastName, Max length is 20");
						frmvalidator.addValidation("lastname","alpha_s","Name can contain alphabetic chars only");
  
						frmvalidator.addValidation("studentid","req","Please enter your Student ID");
						frmvalidator.addValidation("studentid","maxlen=9","Please enter your 8 digit Student ID");
						frmvalidator.addValidation("studentid","numeric","Name can contain numerical chars only");
						frmvalidator.addValidation("studentid","minlen=7","Please enter your 8 digit Student ID");
  
						frmvalidator.addValidation("email","maxlen=50");
						frmvalidator.addValidation("email","req","Please enter your Email");
						frmvalidator.addValidation("email","email");
						
						frmvalidator.addValidation("password","maxlen=50");
						frmvalidator.addValidation("password","req","Please enter your Password");
						frmvalidator.addValidation("password","password");
  
  
						//]]>
					</script
   ><!-- end .content -->
   </div>
   </div>
	<div class="footer">
		<a href="#"><img src="images/footer.jpg" alt="Insert Logo Here" name="Insert_logo" width="1024" height="69" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a>
     <!-- end .footer --></div>
   <!-- end .container --></div>

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
