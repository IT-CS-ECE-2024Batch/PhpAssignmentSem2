<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>

<body>
    <div style="margin:0px auto; padding:15px; width:400px; border:1px solid black;">

        <form action="RupeeTODollarConverter.php" method="post">
            <h2>Rupee Conversion<h2>
                    <p>
                        Enter Rupees : <input type="number" name="number">
                    </p>
                    <input type="submit" value="convert">
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>

        </form>
    </div>
    <?php
    
$rupee= $_POST['number'];
$dollar = ($rupee/73.09);
echo("Rupee in Dollar : ");
echo($dollar );
?>

</body>

</html>