<?PHP
$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$studentid = htmlspecialchars($_POST["studentid"]);

if($firstname and $lastname and $email and $password and $studentid)
{
	# connect to MySQL
	$conn=@mysql_connect("localhost", "sean", "CT188HQkent")
				or die("Err:Conn");

	# select the specified database
	$rs=@mysql_select_db("sean", $conn)
				or die("Err:Db");

	# create the query
	$sql="insert into opensim (firstname, lastname, email, password, studentid)
	values ( \"$firstname\", \"$lastname\", \"$email\", \"$password\", \"$studentid\" )"; 

    # execute the query
	$rs1=mysql_query($sql,$conn);

	# confirm the added record details
		print "<head>
		<meta http-equiv=Content-Type content=text/html; charset=utf-8 />
		<meta http-equiv=X-UA-Compatible content=IE=edge />
		<meta name=viewport content=width=device-width, initial-scale=1.0 />
		<title>OpenSim - Home</title>
		<link href='css/twoColFixLtHdr.css' rel=stylesheet type=text/css />
		<link href='css/bootstrap.css' rel=stylesheet type=text/css />
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
		<script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>
		<![endif]-->
		</head>
		<body>
		
		<body class=opensimbody>
		<div class=opensimcontainer>
		<div class=header>
			<img src=images/header.jpg alt=Insert Logo Here name=Insert_logo width=1024 height=51 id=header1 style=background-color: #8090AB; display:block; />
			&nbsp;
    	<nav>
      		<ul class='nav nav-tabs'>
        		<li><a href=index.php>OpenSim Home</a></li>
        		<li><a href=simulator.php>Simulators</a></li>
        		<li class='dropdown'><a href='' data-toggle='dropdown' class='dropdown-toggle'>Login/Register<b class='caret'></b></a>
          			<ul class='dropdown-menu'>
            			<li><a href='login.php'>Login</a></li>
            			<li><a href='register.php'>Register</a></li>
          			</ul>
        		</li>
      		</ul>
		</nav>
		</div>
		<div style=background-image:url('images/body1.jpg');height:420px;>
		&nbsp;
			<div class=sidebar1>
    			<h2 class=opensimh2>Links</h2>
			</div>
			<div class=content>
				<h1 class=opensimh1>You are now registered to OpenSim as $firstname</h1>
    			<p class=opensimh2><a href=login.php> Click here to log in </a></p>
     		</div>
   		</div>
		<div class=footer>
			<a href=><img src=images/footer.jpg alt=Insert Logo Here name=Insert_logo width=1024 height=69 id=Insert_logo style=background-color: #8090AB; display:block; /></a>
     	</div>
	</div>
	<script src=js/jquery-1.11.3.min.js type=text/javascript></script>
	<script src=js/bootstrap.js type=text/javascript></script>
	</body>";	
}
?>
