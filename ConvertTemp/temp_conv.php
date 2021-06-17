<?php
//temp.php

function celsius_to_fahrenheit($given_value)
{
	$fahrenheit=$given_value*9/5+32;
	return $fahrenheit ;
}

function celsius_to_kelvin($given_value)
{
	$kelvin=$given_value+273.15;
	return $kelvin ;
}
?>

<html>
<head>
	<title>Temperature Conversion </title>
</head>
<body>
	<form action="" method="post">
	<table>
                <tr>
                <td>
                    <select name="first_temp_type_name">
                      
                        <option value="celsius">Celsius</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="given_value">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="second_temp_type_name">
                        <option value="fahrenheit">Fahrenheit</option>
                        
                        <option value="kelvin">Kelvin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btn" value="Convert">
                </td>
            </tr>
            <tr>
                <td>

<?php
if(isset($_POST['btn']))

{
    
    $first_temp_type_name=$_POST['first_temp_type_name'];
    $second_temp_type_name=$_POST['second_temp_type_name'];
    $given_value=$_POST['given_value'];
    

    if ($first_temp_type_name=='celsius') 
    {
        if ($second_temp_type_name=='fahrenheit') 
        {
            $fahrenheit=celsius_to_fahrenheit($given_value);
	        echo "$given_value Celsius  = $fahrenheit Fahrenheit";
        }  elseif ($second_temp_type_name=='kelvin') 
        {
            $kelvin=celsius_to_kelvin($given_value);
            echo "$given_value Celsius   = $kelvin Kelvin";
        }  else 
        {
            echo "$given_value Celsius";
        }
    }
 
    
}

				?>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>