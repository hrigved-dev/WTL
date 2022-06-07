<?php
    include_once('config.php');
    $result = mysqli_query($mysqli, "SELECT * FROM shopping") or die(mysqli_error($mysqli));
?>

<html>
    <head>
        <title>
            Home Page
        </title>
    </head>
    <body>
        <a href="add.html">Add Some Data</a>
        <table border=0 width='80%'>
            <tr>
                <td><strong>itemID</strong></td>
                <td><strong>itemName</strong></td>
                <td><strong>itemQuantity</strong></td>
            </tr>
            <?php
    while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['itemID']."</td>";
        echo "<td>".$res['itemName']."</td>";        
        echo "<td>".$res['itemQuantity']."</td>"; 
        echo "<td><a href=\"delete.php?id=$res[itemID]\">Delete</td>";     
        echo "</tr>";
    }
?>
        </table>
    </body>
</html>
