<html>
    <head>
        <title>
            String Manipulation
        </title>
    </head>
    <body>
        <form method='POST'>
            <input type='text' name='string' placeholder='Enter a string' />
            <input type='submit' name='submit' value='Manipulate' />
</form>
    </body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $string = $_POST['string'];

        function toUpper($str) {
            echo '<br>';
            return strtoupper($str);
        }

        function toLower($str) {
            echo '<br>';
            return strtolower($str);
        }

        function firstUpper($str) {
            echo '<br>';
            return ucfirst($str);
        }

        function allFirstUpper($str) {
            echo '<br>';
            return ucwords($str);
        }

        echo toUpper($string);
        echo toLower($string);
        echo firstUpper($string);
        echo allFirstUpper($string);

    }
?>