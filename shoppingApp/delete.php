<?php
    include_once("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM shopping WHERE itemID='$id'");
    echo "<a href='index.php'>View Data</a>"
?>