<html>
    <head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>

    <?php
    if (isset($_POST['submit'])) {  //check if submit button is clickd

        $value1 =$_POST['value1'];       //define variable
        $value2 =$_POST['value2'];       //define variable
        $operator = $_POST['operator'];  //define variable    
        
        if($operator=='+') {
        echo " <b> The answer is: </b> <br>";
        echo $value1+$value2;
        }
        if($operator=='-') {
        echo " <b> The answer is: </b> <br>";
        echo $value1-$value2;
        }
        if($operator=='*') {
        echo " <b> The answer is: </b> <br>";
        echo $value1*$value2;
        }
        if($operator=='/') {
        echo " <b> The answer is: </b> <br>";
        echo $value1/$value2;
        }
    }
    ?>
        
    <form action='calculator.php' method='post'>
        <input type='text' name='value1'>
        <select name='operator'>
        <option>+</option>
        <option>-</option>
        <option>*</option>
         <option>/</option>
         </select>
        <input type='text' name='value2'>
        <br>
        <input type='submit' name='submit' value='Calculate'>
    </form>

    </body>
</html>