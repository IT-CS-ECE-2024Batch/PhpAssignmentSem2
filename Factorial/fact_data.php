<?php   
    $var = $_GET['number'];
    echo "Entered Number is  $var";
    echo "<br>";
    if($_GET){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_GET['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  