<!DOCTYPE html>
<html>
<head>
	<title>PHP GET Parameters Week 2 Assignment</title>
</head>
<body>
	<!-- Displays a greeting message with the user's first name and last name -->
	<h1>Hello, my name is <?php
	// Retrieves the first name and last name from the GET parameters
	$firstname = $_GET['firstname'] ?? '';
	$lastname = $_GET['lastname'] ?? '';
	// Displays the greeting message
	echo $firstname . ' ' . $lastname;
	?></h1>

	<!-- Displays a message based on the user's age -->
	<p>
		<?php
		// Retrieves the age from the GET parameters
		$age = $_GET['age'] ?? 0;
		// Check if the age is a valid number
		if (is_numeric($age)) {
			// Checking to see if the age is greater than or equal to 18
			if ($age >= 18) {
				// Displays a message indicating that the user is old enough to vote
				echo "I am $age years old and I am old enough to vote in the United States.";
			} else {
				// Displays a message indicating that the user is not old enough to vote
				echo "I am $age years old and I am not old enough to vote in the United States.";
			}
		} else {
			// Displays an error message if the age is not a valid number
			echo "Error: Age is not a valid number.";
		}
		?>
	</p>

	<!-- Calculates the number of days based on the user's age -->
	<p>
		<?php
		// Retrieve the age from the GET parameters
		$age = $_GET['age'] ?? 0;
		// Check if the age is a valid number
		if (is_numeric($age)) {
			// Calculate the number of days based on the age
			$days = $age * 365;
			// Display the number of days
			echo "I have been alive for $days days.";
		} else {
			// Display an error message if the age is not a valid number
			echo "Error: Age is not a valid number.";
		}
		?>
	</p>

	<!-- Displays the current date -->
	<p>
		<?php
		// Displays the current date and time
		echo "Today is " . date('F j, Y g:i A');
		?>
	</p>
</body>
</html>
