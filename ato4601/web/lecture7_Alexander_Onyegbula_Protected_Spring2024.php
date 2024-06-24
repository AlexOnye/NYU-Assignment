<!DOCTYPE html>

<html lang="en">

<head>
	<title>AUTHENTICATED PROTECTED PHP WEB APPLICATION PAGE</title>


</head>

<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<body>
	<?PHP
	session_start();
	
	if ($_SESSION['islogged']){
		echo "Welcome to the PHP Authenticated webpage USERNAME:".$_SESSION['username']."<br/>";
		
	} else{
		header('Location: lecture7_Alexander_Onyegbula_Login_Spring2024.php');
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

<a href = "lecture7_logout_Spring2024.php" class = "btn btn-info btn-lg"><span class = "glyphicon glyphicon-log-out"></span>Logout</a>

<main role = "main">
	<div class = "container">
			<div class="jumbotron">
				<h1>PHP Web Application Authenticated PAGE</h1>
				<p class ="lead">Learning about PHP FORMS and configuring it on the server</p><a href="#" target="_blank" class = "btn btn-success btn-lg">Click here to see more</a></p>
			</div>
			
			
	<hr/>
	
	<ul class = "nav navbar-nav">
		<li><a href = "https://workshop.sps.nyu.edu/~ato4601/lecture7_Alexander_Onyegbula_Protected_Spring2024.php">Home</a></li>
		<li><a href = "?page=apppage1">Page 1</a></li>
		<li><a href = "?page=apppage2">Page 2</a></li>
		<li><a href = "?page=apppage3">Page 3</a></li>
		<li><a href = "?page=apppage4">Page 4</a></li>
		<li><a href = "?page=apppage5">Page 5</a></li>
	</ul>
	
	<div class="row">
    <div class="col">
        <p>Please Upload your file to US using File Upload Features</p>
        
        <form action="lecture7_upload_Spring2024.php" method="post" enctype="multipart/form-data">
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
		<form name = "dbform" method = "post" action = "lecture7_dblogin_spring2024.php">
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
		<form method = "post" action = "lecture7_dbadmintasks.php">
			<button type = "submit" name = "createtable" class = "btn btn-primary">Create Web User Table</button>
			<button type = "submit" name = "droptable" class = "btn btn-primary">Drop Web User Table</button>
		</form>
		
		<hr/>
		<?PHP echo $admin_message ?>
		
	</div>
	
	<div class = "col">
	<hr/>
		<h1>User Registration Menu</h1>
		<form method = "post" action = "lecture7_dbadmintasks.php">
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
		<form method = "post" action = "lecture7_dbadmintasks.php">
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

</body>


</html>