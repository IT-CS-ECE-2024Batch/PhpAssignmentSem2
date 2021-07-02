<html>

<head>
    <title>Square</title>

</head>

<body>
    <div>
        <div>
            <p>
                Find Square of number </p>
            <form method="post" action="squarecalc.php"> Enter the Number:<br>
                <input type="number" name="number" id="number">
                <input type="submit" name="submit" value="Submit" />
            </form>
            <?php
if($_POST){


$number = $_POST['number'];
echo "Square of $number:<br><br>"; echo $Square = $number*$number;


}
?>
        </div>
    </div>
</body>

</html>