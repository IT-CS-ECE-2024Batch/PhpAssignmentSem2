<html>
<head>
 <title>
 Show Records
 </title>
</head>
<body>
 <center>
 <table border="1" cellspacing="5">
 <caption>Student Records</caption>
 <tr>
 <th>Scholar Number</th>
 <th>Name</th>
 <th>Mobile Number</th>
 <th>Email Id</th>
 <th>Address</th>
 <th>Branch</th>
 <th>Semester</th>
 <th>Date of registration</th>
 <th>Ip Address</th>
 </tr>
 <?php
 $connection=mysqli_connect('localhost','root','','registrationrecord');
 if($connection){
 $fetch=mysqli_query($connection,"select * from userrecord");
 if($fetch){
 while($row = $fetch->fetch_assoc()){
 echo "<tr><th>{$row['scholarnumber']}</th>";
 echo "<th>{$row['name']}</th>";
 echo "<th>{$row['mobile']}</th>";
 echo "<th>{$row['email']}</th>";
 echo "<th>{$row['address']}</th>";
 echo "<th>{$row['branch']}</th>";
 echo "<th>{$row['semester']}</th>";
 echo "<th>{$row['time']}</th>";
 echo "<th>{$row['ipaddress']}</th></tr>";
 } 
 }
 else{
 echo "<h3 style=\"color:red;\">Server Error.............</h3>";
 }}
 else{
 echo "<h3 style=\"color:red;\">Server Error.............</h3>";
 }
 ?>
 </table>
 </center>
</body>
</html