<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to". mysqli_connect_error());

}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$desc=$_POST['desc'];

$sql="INSERT INTO `us trip`.`yatra` ( `name`, `age`, `gender`, `email`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$desc', current_timestamp());";

if($con->query($sql)==true)
{
   /* echo "Successfully Inserted";*/
   $insert=true;   
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<img src="1920_iitkharagpur.jpg" alt="IIT KHARAGPUR" >
    <div class="container">
        <h1>Welcome to travel agency</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque voluptatem vel aut ducimus quis illum, velit
            exercitationem id quae vitae!</p>
            <?php
            if($insert == true){
           echo " <p class='sub' >thanx for submitting your form for US trip </p>";
            }
            ?>
        <form action="pindex.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="number" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter your information"></textarea>
            <button class="btn">submit</button>
    

        </form>

    </div>



    <script src="pindex.js"></script>
</body>

</html>