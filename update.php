<?php
include 'db.php';
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST["lastname"];
$score = $_POST['score'];
$sql = "update users set firstname='$firstname', lastname='$lastname', score='$score' where id=$id";
$result = $conn->query($sql);
$conn->close();
header("location: index.php");
