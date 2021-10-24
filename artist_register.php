<!DOCTYPE html>
<html>
<link rel="database1" href="tattoo_artist.sql">
<link rel="stylesheet" href="main_page_style.css">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="submission_validation.js"></script>
<head>
<title>Tattoo_DB</title>
<?php include 'view/header.php'; ?>
</head>
<body>

<h1>Welcome to the artist's page!</h1>
<?php include 'view/Artist_Table.php'; ?>

<p>Register below</p>
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label for="firstname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="firstname" placeholder="First Name" id="firstname" required>
                                <label for="lastname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="lastname" placeholder="lastname" id="lastname" required>
				<label for="Artist">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Artist" placeholder="Artist" id="Artist" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
                                <label for="Appt_Date">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="Date" name="Appt_Date" placeholder="Appt_Date" id="Appt_Date" required>
                                   <label for="Rate">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="number" name="Rate(per hour)" placeholder="Rate(per hour)" id="Rate" required>
				
                                <input type="submit" value="Register"onclick="myFunction()">
                               
			</form>

		</div>

<?php include 'view/footer.php'; ?>
</body>
</html>
