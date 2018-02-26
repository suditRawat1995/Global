<?php
$connect= new mysqli('localhost','root','','gegs');
if($connect->connect_error)
{
die("connection failed");
}
else
//echo "connect worked";
$username= $_POST['username'];
$password= $_POST['password'];
$sql="SELECT name FROM users WHERE username='$username' AND password='$password'";
$result= $connect->query($sql);
if($result-> num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<br>";
echo "admin name is: " . $row["name"];
}
}
else
{
echo "Username and password do not match!";
} 
?>