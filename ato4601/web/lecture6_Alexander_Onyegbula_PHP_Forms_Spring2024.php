<!DOCTYPE html>

<html lang="en">

<head>
	<title>My PHP FORMS page with Bootstrap</title>


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
		<!--7. First Form-->
			<div class = "col">
			<?PHP	
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
			?>
						
				<form>
					<label for = "name">Name</label>
					<input id = "name" type = "text" name = "name">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
			
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
				
			</div>
			
			
		<!--9. PHP From with Submission Population-->
			<div class = "col">
			<?PHP	
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
			?>
			
			
				<form>
					<label for = "name">Name with post-Population</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $_GET['name']; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
			
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			
			
			</div>
			
		<!--10. PHP Form with submit confirm-->
			
			<div class = "col">
			<?PHP
			if (isset($_GET['submit'])) {
				echo "The GET['submit'] value was set to true";
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
			}
			?>
			
			
				<form>
					<label for = "name">Name with Submit Confirmation</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $_GET['name']; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
			
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			
			
			</div>
			
		
		<!--11. PHP Form with Variable initialization-->
			
			<div class = "col">
			<?PHP
			$name = "";
			if (isset($_GET['submit'])) {
				echo "The GET['submit'] value was set to true";
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
				$name = $_GET['name'];
			}
			?>
			
				<hr/>
				<form method = "get" action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<label for = "name">Name with Variable Initialization</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
			
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			
			<hr/>
			
			</div>
			
		<!--11. PHP Form with default attribute value-->
					
			<div class = "col">
			<?PHP
			$name = "";
			if (isset($_GET['submit'])) {
				echo "The GET['submit'] value was set to true";
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
				$name = $_GET['name'];
			}
			?>
			
				<hr/>
				<form method = "get" action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<label for = "name">Name with Explicit Attributes Default</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
			
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			
			<hr/>
			
			</div>
			
		</div>
		
		
		<div class = "row">
			
			
		<!--12. PHP Form with Post Method-->
			
			<div class = "col">
			<?PHP
			$name = "";
			if (isset($_GET['submit'])) {
				echo "The GET['submit'] value was set to true";
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
				$name = $_GET['name'];
			}
			
			if (isset($_POST['submit'])) {
				echo "The POST['submit'] value was set to true";
				echo "<pre>";
				var_dump($_POST);
				echo "</pre>";
				$name = $_POST['name'];
			}
			?>
			
				<hr/>
				<form method = "post" action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<label for = "name">Name with Post Method</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
			
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
				<hr/>
			</div>
		
		
		<!--14. PHP Form with Request Method-->
		
			<div class = "col">
			<?PHP
			$name = "";
			if (isset($_REQUEST['submit'])) {
				echo "The REQUEST['submit'] value was set to true";
				echo "<pre>";
				var_dump($_REQUEST);
				echo "</pre>";
				$name = $_REQUEST['name'];
			}
			
			if (isset($_GET['submit'])) {
				echo "The GET['submit'] value was set to true";
				echo "<pre>";
				var_dump($_GET);
				echo "</pre>";
				$name = $_GET['name'];
			}
			
			if (isset($_POST['submit'])) {
				echo "The POST['submit'] value was set to true";
				echo "<pre>";
				var_dump($_POST);
				echo "</pre>";
				$name = $_POST['name'];
			}
			?>
		
				<hr/>
				<form method = "post" action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<label for = "name">Name with Post Method</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
				
				<form method = "get" action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<label for = "name">Name with Get Method</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit">Submit</button>
				</form>
							
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			</div>
		
		
		<!--15. PHP Form with $_SERVER['PHP_SELF'] Variable-->
			
			<div class = "col">
			<?PHP
			$name = "";
			echo $_SERVER['PHP_SELF'];
			if (isset($_REQUEST['submit'])) {
				echo "The REQUEST['submit'] value was set to true";
				echo "<pre>";
				var_dump($_REQUEST);
				echo "</pre>";
				$name = $_REQUEST['name'];
			}
			?>
		
				<hr/>
				<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
					<label for = "name">Name with Post Method</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit" name = "submit">Submit</button>
				</form>
							
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			</div>
			
		</div>
		
		
		<div class = "row">
			
			
		<!--16. PHP Form validation with PHP, JS, and Html5-->
			<div class = "col">
			<?PHP
			$name = "";
			$name_message = "";
			if (isset($_REQUEST['submit'])) {
				echo "The REQUEST['submit'] value was set to true";
				echo "<pre>";
				var_dump($_REQUEST);
				echo "</pre>";
				$name = $_REQUEST['name'];
			
				if (empty($name)){
					$name_message = "Name is required, cannot be left blank or empty!!";
				}
				elseif (strlen($name) <=5){"Name length is required to be at least 6 characters!!";
				}
			}
			?>
			
			<script>
			function validateForm(){
				var name = document.forms["myform"]["name"].value;
				if (name == ""){
					alert("Name is required, cannot be left blank!");
					return false;
				}
				else if (name.length < 6){
					alert("Name must be 6 characters or more! TRY AGAIN!");
					return false;
				}
			}
			
			</script>
			
			
				<hr/>
				<form id = "myform" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit = "return validateForm()">
					<label for = "name">Name with Validation</label>
					<input id = "name" type = "text" name = "name" value = "<?php echo $name; ?>">
					<br/>
					<button id = "submit1" type = "submit" name = "submit">Submit</button>
					<br/>
					<?php echo $name_message?>
				</form>
							
				<form action = "lecture6_Alexander_Onyegbula_PHP_Forms_Spring2024.php">
					<button id = "submit" type = "submit">RESET</button>
				</form>
			</div>
			
		<!--17. -->
			
			
			
			
			
		</div>
		
	</div>
	
	</main>
				
			


</body>


</html>