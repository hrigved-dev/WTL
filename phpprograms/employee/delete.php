<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli,"DELETE FROM empolyee WHERE id=$id");
header("Location:index.php");
?>