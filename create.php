<?php
include 'db.php';
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$score = $_POST["score"];
$sql = "insert into users (firstname,lastname, score) values ('$firstname','$lastname', '$score')";
$conn->query($sql);
$conn->close();
header("location: index.php");
