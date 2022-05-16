<html>
    <head>
        <title>
            Electricity Bill
</title>
    </head>
<body>
<form method="POST">
            <input type="number" name="units" placeholder="Enter the units" />
            <input type="submit" name="submit" value="Submit" />
</form>
</body>
    </html>

<?php
    if(isset($_POST['submit'])) {
        $units = $_POST['units'];
        
        
    }
?>