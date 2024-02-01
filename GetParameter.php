<!DOCTYPE html>
<html>
<head>
	<title>PHP GET Parameters Example</title>
</head>
<body>
	<h1>Hello, my name is <?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>.</h1>

	<p>
		<?php
			$age = intval($_GET['age']);
			if ($age >= 18) {
				echo "I am $age years old and I am old enough to vote in the United States.";
			} else {
				echo "I am $age years old and I am not old enough to vote in the United States.";
			}
		?>
	</p>

	<p>
		<?php
			$days = $age * 365;
			echo "I have been alive for $days days.";
		?>
	</p>

	<p>
		<?php
			echo "Today is " . date('F j, Y');
		?>
	</p>
</body>
</html>