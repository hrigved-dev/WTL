<html>
    <head>
        <title>
            Square Root
</title>
    </head>
<body>
<form method="POST">
            <input type="number" name="number" placeholder="Enter the number" />
            <input type="submit" name="submit" value="Submit" />
</form>
</body>
    </html>

<?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];
        function sqRoot($number) {
            return sqrt($number);
        }

        echo round(sqRoot($number), 2);
        
    }
?>