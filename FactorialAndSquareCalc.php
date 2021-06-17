<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        .n{
            border: none;
            border-radius: 8px;
            
           
            
        }
        .n:hover{
            color:red;
        }
        </style>
</head>
<body>
<div style="margin:0px auto; padding:15px; width:400px; border:1px solid black;">
    <form action="factorial_square.php" method="post">
        <p>Enter Number : <input type="number" name="n1"></p>
        <input type="submit" class="n" name="n2" id="Factorial" value="Factorial"><br>
        <input type="submit" class="n" name="n2" id="Square" value="Square">
        <br>
    </form>
</div>
<?php

$number=$_POST['n1'];

if($_POST['n2']=='Factorial')
{
    $fact = 1;  
    //getting value from input text box 'number'  
    $number = $_POST['n1'];  
    echo "Factorial of $number:<br><br>";  
    //start loop  
    for ($i = 1; $i <= $number; $i++){         
        $fact = $fact * $i;  
        }  
        echo $fact . "<br>";  
}
if($_POST['n2']=='Square')
{
    echo "Square of $number: <br><br>";
    echo $Square = $number*$number;
//     echo $Square . "<br>";
 }
?>

    
</body>
</html>