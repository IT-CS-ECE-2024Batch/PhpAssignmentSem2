<?php
    $server="localhost";
    $username="";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    $name=$_POST['std_name'];
    $scholar_no=$_POST['scholar_no'];
    $email_id=$_POST['email_id'];
    $address=$_POST['address'];

    $sql="INSERT INTO `student`.`reg` (`std_name`, `scholar_no`, `email_id`, `address`) VALUES ('$name', '$scholar_no', '$email_id', '$address')";

    if($con->query($sql)==true)
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
?>

<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Student Registration Portal</h1>
            <form action="fillData.php" method="post">
            <input type="text" name="std_name" id="std_name" placeholder="enter your name">
            <input type="number" name="scholar_no" id="scholar_no" placeholder="enter your scholar_no">
            <input type="text" name="address" id="address" placeholder="enter your addres">
            <input type="email" name="email_id" id="email_id" placeholder="enter your email_id">
            <button class="btn">submit</button>
        </form>
    </div>
</body>
</html>
