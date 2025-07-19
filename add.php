<?php
include "db.php";

$title = $_POST['title'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];

$sql = "INSERT INTO books (title, author, isbn) VALUES ('$title', '$author', '$isbn')";
mysqli_query($conn, $sql);

header("Location: index.php");
?>
