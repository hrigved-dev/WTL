<html>
    <head>
        <title>
            Palindrome
        </title>
    </head>
    <body>
        <form method='POST'>
            <input type='text' name='string' placeholder='Enter the string' />
            <input type='submit' name='submit' value='Check' />
</form>
</body>
    </html>

<?php
    if(isset($_POST['submit'])) {
        $string = $_POST['string'];

        function isPalindrome($str) {
            $isPalindrome = false;
            $revStr = strrev($str);
            if($str == $revStr) {
                echo "Palindrome";
            }
            else {
                echo "Not a Palindrome";
            }
        }

        isPalindrome($string);

    }
?>
