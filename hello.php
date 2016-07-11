<html>
    <head>

    </head>
    
    <body>
        <?PHP
        for ($j = 1; $j <= 100; $j++) {
            echo "<pre>";
            for ($x = 1; $x <= 10; $x++) {
                for ($y = 1; $y < $x; $y++) {    
                echo "\t";
                }
            echo "hello world\n";
            }

            for ($x = 11; $x >= 1; $x--) {
                for ($y = 1; $y < $x; $y++) {    
                echo "\t";
                }
            echo "hello world\n";
            }
        }
        ?>
    </body>
</html>