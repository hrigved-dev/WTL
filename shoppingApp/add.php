<html>
    <head>
        <title>
            Add Data
        </title>
    </head>
    <body>
        <?php
            include_once('config.php');
            if(isset($_POST['submit'])) {
                $itemID = mysqli_real_escape_string($mysqli, $_POST['itemID']);
                $itemName = mysqli_real_escape_string($mysqli, $_POST['itemName']);
                $itemQuantity = mysqli_real_escape_string($mysqli, $_POST['itemQuantity']);


                if(empty($itemID) || empty($itemName) || empty($itemQuantity)) {
                    if(empty($itemID)) {
                        echo "<font color='red'>Item ID field is empty</font>";
                    } else if(empty($itemName)) {
                        echo "<font color='red'>Item Name field is empty</font>";
                    } else {
                        echo "<font color='red'>Item Quantity</font>";
                    }
                } else {
                    $result = mysqli_query($mysqli, "INSERT INTO shopping(itemID, itemName, itemQuantity) VALUES('$itemID', '$itemName', '$itemQuantity')");

                    echo "<font color='green'>Data Added Successfully</font><br>";
                    echo "<a href='index.php'>View Data</a>";
                }

            }
        ?>
    </body>
</html>