<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../front/css/bootstrap.min.css">
    <link rel="stylesheet" href="../front/css/styles.css">
</head>

<body>
    <?php
    $errorMessage = null;
    if (!empty($_POST)) {
        require "connectdb.php";
        $username = strtolower(isset($_POST['name']) ? $_POST['name'] : "");
        $checkQuery = "SELECT name FROM employee, manager WHERE LOWER(name)= '$name' ";
        $check = mysqli_query($con, $checkQuery);

        if (mysqli_num_rows($check) > 0) {
            $errorMessage = 1;
        } else {
            $sql = "INSERT into employee(eid, name, email , password)
                VALUES('$_POST[eid]','$_POST[name]','$_POST[email]','$_POST[password]')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<div class='alert alert-success' >Account created. Now login with your email and password</div>";
            } else {
                die("Error in connection " . mysqli_error($con));
            }
        }
        if (mysqli_num_rows($check) > 0) {
            $errorMessage = 1;
        } else {
            $sql = "INSERT into manager( name, department, email , password)
                VALUES('$_POST[name]','$_POST[department]','$_POST[email]','$_POST[password]')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<div class='alert alert-success' >Account created. Now login with your email and password</div>";
            } else {
                die("Error in connection " . mysqli_error($con));
            }
        }
    }
    ?>
    <fieldset class="container-md">
        <legend>Sign up</legend>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="login">
            <label for="username" class="col-sm-2 col-form-label col-form-label-sm" >Username</label>
            <input type="text" name="username" class="form-control" required="required"/>
            <?php
            if ($errorMessage == 1) {
                echo '<div class="alert alert-danger alert-dismissible fade show">Username already exists.</div>';
            }
            ?>

            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <input type="email" name="email" class="form-control" required="required"/>

            <label for="Password" class="col-sm-2 col-form-label col-form-label-sm" >Password</label>
            <input type="password" name="password" class="form-control" required="required"/>
            <input type="submit" value="Sign up" class="btn btn-primary" />
            <button class="btn btn-secondary"><a href="../summerproject/HTML/loginn.html" class="a">Already have an
                    account</a></button>
        </form>
    </fieldset>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Registration Form</h1>

		<div class="section">
			<h2>Employee Section</h2>
			<p>Please fill out the following information:</p>

			<form>
				<label for="name">Eid:</label>
				<input type="text" id="name" name="name"><br><br>

				<label for="name">Name:</label>
				<input type="text" id="name" name="name"><br><br>


                <label for="email">Email:</label>
				<input type="text" id="email" name="email"><br><br>

                <label for="password">Password:</label>
				<input type="password" id="password" name="password"><br><br>

				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="section">
			<h2>Manager Section</h2>
			<p>Please fill out the following information:</p>

			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name"><br><br>

                <label for="Department">Department:</label>
				<input type="text" id="department" name="department"><br><br>
				
				<label for="email"> M Email:</label>
				<input type="email" id="email" name="email"><br><br>

                <label for="Password">Password:</label>
				<input type="password" id="password" name="Password"><br><br>

				<input type="submit" value="Submit">
			</form>
		</div>

	</div>

</body>
</html>

<style>
  body {
	font-family: Arial, sans-serif;
	background-color: rgb(173,216,230);
}

.container {
	margin: 0 auto;
	max-width: 600px;
	padding: 20px;
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
}

h1, h2 {
	text-align: center;
}

.section {
	margin-bottom: 30px;
	padding: 20px;
	border: 2px solid #ccc;
	border-radius: 10px;
}

label {
	display: inline-block;
	width: 150px;
}

input[type="text"], input[type="date"], input[type="tel"],input[type="password"] , input[type="email"]  {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border-radius: 5px;
	border: none;
	background-color: #f2f2f2;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	border: none;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #45a049;
}

</style>
