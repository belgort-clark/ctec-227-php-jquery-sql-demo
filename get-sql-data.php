<?php
$db = new mysqli('localhost', 'root', '', 'ctec');
$db->set_charset('utf8');

if (isset($_GET['id'])) {
    $id = $_GET['id']; // get id
    $sql = 'SELECT * FROM student_v2 WHERE ID=' . $id;
    $result = $db->query($sql); // query the database
    echo json_encode($result->fetch_assoc()); // get row and json_encode
}

$db->close();
