<?PHP
	
	session_start();

	
	//17b. External PHP Code
			$name = "";
			$name_message = "";
			$validated = false;
			
			echo $_SERVER['PHP_SELF'];
			
			$name = "";
			if (isset($_REQUEST['submit'])) {
				echo "The REQUEST['submit'] value was set to true";
				echo "<pre>";
				var_dump($_REQUEST);
				echo "</pre>";
				$name = $_REQUEST['name'];
				
				//IF statements to validate form
			if (empty($name)){
				$name_message = "Name is required, cannot be left blank or empty !!";
			}
			elseif (strlen($name) <=5){
				$name_message = "Name length is required to be atleast 6 characters !!";
			}$name_message = "All Form Validations succeeded.";
			
			
			}
			
			if ($name_message == ""){
				$validated = true;
				
			}
			
			//If validation is successful vs. Unsuccessful.
			if (!$validated) {
				$_SESSION['myform_name'] = $name;
				$_SESSION['myform_name_message'] = $name_message;
			}
			else{
				$_SESSION['myform_name'] = $name;
				$_SESSION['myform_name_message'] = "SUCCESSFUL VALIDATION";
			}
			
			
		
		//send back to referrer website	
		header('Location: '. $_SERVER['HTTP_REFERER']);
		exit;
		
			?>