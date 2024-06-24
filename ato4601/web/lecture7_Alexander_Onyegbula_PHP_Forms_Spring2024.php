<!DOCTYPE html>

<html lang="en">

<head>
	<title>My PHP FORMS Page</title>


</head>

<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<body>
	<main role = "main">
	<div class = "container">
			<div class="jumbotron">
				<h1>Learning and Testing PHP FORMS</h1>
				<p class ="lead">Learning about PHP FORMS and configuring it on the server</p><a href="#" target="_blank" class = "btn btn-success btn-lg">Click here to see more</a></p>
			</div>
		
		<div class = "row">
			
			
		<!--17. PHP Form ACTION SCRIPT-->
			<div class = "col">
				<?PHP
				//Start a session to get data from other session pages.
				session_start();
				
				$name = "";
				$name_message = "";
				
				//Copy Session variable data into local variables.
				if (isset($_SESSION['myform_name'])){
					$name = $_SESSION['myform_name'];
					$name_message = $_SESSION['myform_name_message'];
					
					//clear out session variables;
					unset ($_SESSION['myform_name']);
					unset ($_SESSION['myform_name_message']);
				}
				
				?>
			
			
			
				<hr/>
				<form id = "myform" method = "post" action = "lecture7_process_Spring2024.php">
					<label for = "name">Name with ACTION SCRIPT</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit2" type = "submit" name = "submit">Submit</button>
					<br/>
					<?php echo $name_message?>
				</form>
							
				<form action = "lecture7_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
				
				<hr/>
				
			</div>
		

		</div>
		
		
		
		<div class = "row">
			<div class = "col">
			
				<form method = 'post' action = "lecture7_Alexander_Onyegbula_contactus_process.php">
					<label>Name:</label>
					<input name = "sender">
					<br/>
					
					<label>Email:</label>
					<input name = "senderEmail">
					<br/>
					
					<label>Memos:</label>
					<textarea rows = "5" cols = "20" name = "message"></textarea>
					<br/>
					
					<input type = "submit" name = "submit_contact">
				</form>
					
			
			
			
			</div>
			
		</div>
		
	</div>
	
	</main>


</body>


</html>