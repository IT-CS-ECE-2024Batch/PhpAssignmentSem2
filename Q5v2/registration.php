<html>
 <head>
 <title> Registration</title>
 </head>
 <body>
 <?php
 if(isset($_POST["username"])){
 $name=$_POST['username'];
 $scholar=$_POST['scholar'];
 $mobile=$_POST['mobile'];
 $email=$_POST['mail'];
 $semester=$_POST['semester'];
 $address=$_POST['add'];
 $branch=$_POST['branch'];
 $ip=$_SERVER['REMOTE_ADDR'];
 date: date_default_timezone_set('Asia/Kolkata');
 $time=date('d/m/Y h:i:s a', time());
 $connection=mysqli_connect('localhost','root','','registrationrecord');
 if($connection){
 $fetch=mysqli_query($connection,"select * from userrecord where 
(email='{$email}' or mobile='{$mobile}')");
 if($fetch){
 if($fetch->num_rows==1){
 echo "<h3 style=\"color:red;\">This Email id or Mobile 
Number aleredy register Please try other</h3>";
 }
 else{
 $insert=mysqli_query($connection,"insert into userrecord 
(scholarnumber,name,mobile,email,address,semester,ipaddress,time, branch) 
values('{$scholar}','{$name}','{$mobile}','{$email}','{$address}','{$semester}',
'{$ip}','{$time}','{$branch}');");
 if($insert){
 echo "<h1 style=\"color:green;\">Your registration is 
successful your login id is {$email} and your password is your mobile 
number</h1>";
 }
 else{
 echo "<h3 style=\"color:red;\">Server 1
Error.............</h3>";
 }
 }
 }
 
 else{
 echo "<h3 style=\"color:red;\">Server 2 Error.............</h3>";
 }}
 else{
 echo "<h3 style=\"color:red;\">Server 3 Error.............</h3>";
 }
 }
 else{
 echo "<form action=\"registration.php\" method=\"post\"><center><table 
border=\"1\"cellspacing=0 cellpadding=20 width=800><tr>
 <th>Scholar Id</th>
 <th><input required 
type=\"text\"name=\"scholar\"placeholder=\"Enter your scholar id\"></th>
 </tr>
 <tr>
 <th>Name</th>
 <th><input required 
type=\"text\"name=\"username\"placeholder=\"Enter your Name\"></th>
 </tr>
 <tr>
 <th>Mobile Number</th> <th><input type=\"text\"required 
name=\"mobile\"placeholder=\"Enter your Mobile Number\"></th>
 </tr>
 <tr>
 <th>Email Id</th>
 <th><input type=\"email\" required 
name=\"mail\"placeholder=\"Enter your Email id\"></th>
 </tr>
 <tr>
 <th>Address</th>
 <th><input type=\"textarea \"required 
name=\"add\"placeholder=\"Enter your Address\"></th>
 </tr>
 <tr>
 <th>Semester</th>
 <th>
 <select required name=\"semester\">
 <option>Select Semester</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 </select>
 </th>
 </tr>
 <tr>
 <th>Branch</th>
 <th>
 <select required name=\"branch\">
 <option>Select Branch</option>
 <option>CSE</option>
 <option>IT</option>
 <option>ECE</option>
 <option>Other</option>
 </select>
 </th>
 </tr>
 <tr>
<th>
<input type=\"submit\"value=\"Submit\">
</th>
<th>
<input type=\"reset\"value=\"Reset\">
</th>
 </tr>
 </table>
 </center>
 </form>" ; 
 
 }?>
 
 </body>
</html
