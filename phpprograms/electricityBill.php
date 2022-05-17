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
        
        function calculateBill($u) {
            $total = 0;
            if($u > 250) {
                $total = $u * 6.50;
            }
            else {
                if($u <= 50) {
                    $total = $u * 3.50;
                }
                elseif($u <= 100) {
                    $total = 50 * 3.50;
                    $u = $u - 50;
                    $total = $total + ($u  * 4.00);
                }
                else {
                    $total = 50 * 3.50;
                    $u = $u - 50;
                    $total = $total + (100 * 4.00);
                    $u = $u - 100;
                    $total = $total + ($u * 5.20);
                }
            }

            return $total;
        }

        $result = calculateBill($units);

        echo "The total bill for $units is dollars $result";
        
    }
?>