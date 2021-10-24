<?php
$servername = "localhost";
$username = "artist_db";
$password = "pa55word";
try {
  $conn = new PDO("mysql:host=$servername;artist_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['Artist'], $_POST['email'], $_POST['Appt_Date'], $_POST['Rate'])) {
    if (empty($_POST['firstname'] || $_POST['lastname'] || $_POST['Artist'] || $_POST['email'] || $_POST['Appt_Date'] || $_POST['Rate'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}

// We need to check if the account with that username exists.
// Username doesnt exists, insert new account
if ($stmt = $conn->prepare('INSERT INTO Submission (firstname, lastname, Artist,  email, Appt_Date, Rate) VALUES (?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$stmt->bind_param('sss', $_POST['firstname'],  $_POST['lastname'], $_POST['Artist'], $_POST['email'], $_POST['Appt_Date'],$_POST['Rate']);
	$stmt->execute();
	echo 'You have successfully registered!Prepare for INK!!';
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $conn->prepare('SELECT id, firstname, lastname, Artist,  email, Appt_Date, Rate FROM Submission WHERE firstname, lastname, Artist,  email, Appt_Date, Rate = ?, ?, ?, ?, ?, ?')) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['First_name']) == 0) {
    exit('First_name is not valid!');
      if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['Last_name']) == 0) {
    exit('Last_name is not valid!');
      if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['Artist']) == 0) {
    exit('Artist is not valid!');
      if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['Appt_Date']) == 0) {
    exit('Date is not valid!');
      if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['Rate']) == 0) {
    exit('Rate is not valid!');
}
}
    
}
      }
        }
    }
}
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.

$con->close();


?>