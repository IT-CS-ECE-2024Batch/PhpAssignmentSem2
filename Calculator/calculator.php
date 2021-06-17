<html>

<head>
    <title>Form Processing
    </title>
</head>

<body>
    <div style="margin:0px auto;padding:15px;width:400px;border:1px solid black">
        <?php
if (isset($_GET['n3']))
{
    $var1= $_GET['n1'];
    $Fact= 1;
    for($i=1;$i<=$var1;$i++)
    {
        $Fact=$Fact*$i;
    }
    echo "the factorial of the number is{$Fact} ";
    echo "<br>";
    echo "<a href=\"calculator.php\"> BACK </a>";
}
elseif(isset($_GET['n4']))
{
    $var1 = $_GET['n1'];
    $var2 = $var1 * $var1;
    echo "the square of the number is {$var2}";
    echo "<br>";
    echo "<a href =\"calculator.php\" > <input type = \"button\" value = \"back\" /></a>";
}
elseif(isset($_GET['n5']))
{
    $var1 = $_GET['n1'];
    $var3 = $_GET['n2'];
    $var2 = $var1 + $var3;
    echo "the sum of the number is {$var2}";
    echo "<br>";
    echo "<a href =\"calculator.php\" > <input type = \"button\" value = \"back\" /></a>";
}
elseif(isset($_GET['n6']))
{
    $var1 = $_GET['n1'];
    $var3 = $_GET['n2'];
    $var2 = $var1 * $var3;
    echo "the product of the number is {$var2}";
    echo "<br>";
    echo "<a href =\"calculator.php\" > <input type = \"button\" value = \"back\" /></a>";
}

elseif(isset($_GET['n7']))
{
    $var1 = $_GET['n1'];
    $var3 = $_GET['n2'];
    $var2 = $var1 - $var3;
    echo "the difference between the number is {$var2}";
    echo "<br>";
    echo "<a href =\"calculator.php\" > <input type = \"button\" value = \"back\" /></a>";
}
elseif(isset($_GET['n8']))
{
    $var1 = $_GET['n1'];
    $var3 = $_GET['n2'];
    $var2 = $var1 / $var3;
    echo "the divisionresult between number is {$var2}";
    echo "<br>";
    echo "<a href =\"calculator.php\" > <input type = \"button\" value = \"back\" /></a>";
}

else
{
    echo "<form method =\"get\" action=\"calculator.php\">";
    echo"Primary Number: </br>";
    echo "<input type =\"number\" name=\"n1\" value=\"\"/><br><br>";
    echo"Secondary Number: </br>";
    echo "<input type =\"number\" name=\"n2\" value=\"\"/><br><br>";
    echo "<input type =\"submit\" name=\"n3\"value =\"factorial\" />";
    echo "<input type =\"submit\" name=\"n4\"value =\"square\" />";
    echo "<input type =\"submit\" name=\"n5\"value =\"+\" />";
    echo "<input type =\"submit\" name=\"n6\"value =\"*\" />";
    echo "<input type =\"submit\" name=\"n7\"value =\"-\" />";
    echo "<input type =\"submit\" name=\"n8\"value =\"/\" />";
    echo "</form>";
}

?>
    </div>



</body>

</html>