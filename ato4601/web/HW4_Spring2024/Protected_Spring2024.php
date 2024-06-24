<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My PHP Forms with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>My First PHP Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect.</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="hw4_Alexander_Onyegbula_PHP_Spring2024.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="lecture1_html_bs.html">Lecture 1</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture2_css.html">Lecture 2</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture3_js.html">Lecture 3</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture4_bs.html">Lecture 4</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture5_php.php">Lecture 5</a></li>
			<li class="nav-item"><a class="nav-link" href="Contact_Us.php">Contact Us</a></li>
			<li class="nav-item"><a class="nav-link" href="Login_Spring2024.php">Login</a></li>
			<li class="nav-item"><a class="nav-link" href="PHP_Forms_Spring2024.php">PHP Forms</a></li>
        </ul>
    </div>
</nav>



	<?PHP
	session_start();
	
	if ($_SESSION['islogged']){
		echo "Welcome to the PHP Authenticated webpage USERNAME:".$_SESSION['username']."<br/>";
		
	} else{
		header('Location: Login_Spring2024.php');
		exit();
	}
	
	$current_page = "home";
	
	if(isset($_GET['page']) && $_GET['page'] != ""){
		$current_page = $_GET['page'];
	}
	
	$current_page_redirect = "templates_spring2024/_".$current_page.".php";
	if($current_page != "home"){
		header('Location:'.$current_page_redirect);
		exit();
	}
	
	?>

<a href = "logout_Spring2024.php" class = "btn btn-info btn-lg"><span class = "glyphicon glyphicon-log-out"></span>Logout</a>

<main role = "main">
	<div class = "container">
			<div class="jumbotron">
				<h1>PHP Web Application Authenticated PAGE</h1>
				<p class ="lead">Learning about PHP FORMS and configuring it on the server</p><a href="#" target="_blank" class = "btn btn-success btn-lg">Click here to see more</a></p>
			</div>
			
			
	<hr/>
	
	<ul class = "nav navbar-nav">
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/HW4_Spring2024/Protected_Spring2024.php">Home</a></li>
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/templates_spring2024/?page=apppage1">Page 1</a></li>
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/templates_spring2024/?page=apppage2">Page 2</a></li>
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/templates_spring2024/?page=apppage3">Page 3</a></li>
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/templates_spring2024/?page=apppage4">Page 4</a></li>
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/templates_spring2024/?page=apppage5">Page 5</a></li>
	</ul>
	
	<div class="row">
    <div class="col">
        <p>Please Upload your file to US using File Upload Features</p>
        <form action="upload_Spring2024.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Choose a file:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" name="submit" value="Upload File">
        </form>
    </div>
</div>

<hr/>

<div class = "row">
	<div class = "col">
		<h1>Oracle Database Connection to NYU Workshop</h1>
		<br/>
		<form name = "dbform" method = "post" action = "dblogin_spring2024.php">
			<label>Oracle Database Username:</label>
				<input name = "dbusername">
		
			<label>Oracle Database Password:</label>
				<input name = "dbpassword" type = "password">
	
			<label>Oracle Database RAW SQL Query Field:</label>
				<textarea = "5" cols = "20" name = "dbquery"></textarea>
			
			<br/>
			
			<input type = "submit" name = "submit" id = "button" value = "Login\Execute DB Query">
			

		</form>
	<hr/>
	</div>
</div>

<div class = "row">
	<?php 
	$admin_message = '';
	$registeredusermessage = '';
	$loginvalidationmessage = '';
	
	if(isset($_SESSION['admin_message'])){
		$admin_message = $_SESSION['admin_message'];
	}
	
	if(isset($_SESSION['registeredusermessage'])){
		$registeredusermessage = $_SESSION['registeredusermessage'];
	}
	
	if(isset($_SESSION['loginvalidationmessage'])){
		$loginvalidationmessage = $_SESSION['loginvalidationmessage'];
	}
	?>
	<div class = "col">
	<hr/>
		<h1>User Administration Menu</h1>
		<form method = "post" action = "dbadmintasks.php">
			<button type = "submit" name = "createtable" class = "btn btn-primary">Create Web User Table</button>
			<button type = "submit" name = "droptable" class = "btn btn-primary">Drop Web User Table</button>
		</form>
		
		<hr/>
		<?PHP echo $admin_message ?>
		
	</div>
	
	<div class = "col">
	<hr/>
		<h1>User Registration Menu</h1>
		<form method = "post" action = "dbadmintasks.php">
			<div class = "form-group">		
				<label for="name">Name</label>
				<input id = "name" type = "text" name = "name" class = "form-control" placeholder = "Enter User Full Name">
			</div>
			
			<div class = "form-group">		
				<label for="email">Email</label>
				<input id = "email" type = "email" name = "email" class = "form-control" placeholder = "Enter Email Address">
			</div>
			
			<div class = "form-group">		
				<label for="password">Password</label>
				<input id = "password" type = "password" name = "password" class = "form-control" placeholder = "Enter Desired Password">
			</div>
			
			<button type = "submit" name = "registeruser" class = "btn btn-primary">Register User</button>
		</form>
		
		<?php echo $registeredusermessage; ?>
		
		<hr/>
	</div>
	
	<div class = "col">
	<hr/>
		<h1>Login Validation Menu</h1>
		<form method = "post" action = "dbadmintasks.php">
			<div class = "form-group">		
				<label for="name">Username Email</label>
				<input id = "validationemail" type = "text" name = "registeredemail" class = "form-control" placeholder = "Enter Registered Email">
			</div>
			
			<div class = "form-group">		
				<label for="email">Password</label>
				<input id = "validationpassword" type = "password" name = "registeredpassword" class = "form-control" placeholder = "Enter Registered Password">
			</div>
			
			<button type = "submit" name = "loginvalidate" class = "btn btn-primary">Validate Login</button>
		</form>
		
		<?php echo $loginvalidationmessage; ?>
		
		<hr/>
	</div>

</div>

</div>
</main>

<script src ="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src ="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src ="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>


</html>