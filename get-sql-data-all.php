<?php
# Create a new connection to the database
$db = new mysqli('localhost','root','','ctec');

# If there was an error connecting to the database
if ($db->connect_error) {
	$error = $db->connect_error;
	echo $error;
}

# Set the character encoding of the database connection to UTF-8
$db->set_charset('utf8');

# Is there a query paremeter in the URL?

$sql = 'SELECT * FROM student_v2';
$result = $db->query($sql); // query the database
echo json_encode($result->fetch_all(MYSQLI_ASSOC)); // get row and json_encode
