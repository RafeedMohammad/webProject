<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>

<?php
    if (isset($_POST['submit'])) {
    	if(empty($_POST['username']))
    	{
    		echo "<p style='color: red'>Field must not be empty</p>";

    	}

    	else if (strlen($_POST['username'] >= 5)) {

    		echo "<p style='color: red'>Length must be at least 5</p>";
    	}

    	else{
    		echo "Welcome: ".$_POST['username'];
    	}

    	

    }
?>

	<form action=" " method="POST">
		<input type="text" name="username" placeholder="First Name"><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>