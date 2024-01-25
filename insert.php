<?php
error_reporting(0);
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "admin";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysqli_connect($hostname, $username, $password);
// MySQL select database
mysqli_select_db($database, $conn);

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php
error_reporting(0);
$host='localhost';
$user='root';
$pass='';
$db='admin';
$con=mysqli_connect($host,$user,$pass,$db);
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$district=$_POST['district'];
$phone=$_POST['phone'];
$verify=$_POST['verify'];
$talent=$_POST['talent'];
$date=$_POST['date'];
if($age>=36){
  echo"<center><font size=10>you are not allowed to participate becouse of your age<br/>Sorry!!!</font></center>";
}
elseif($id>=51)
{
  echo "<center><font color=green><font size=10><script>alert('You are late The place is full try to register next time')</script></font></font></center>";
}
  else{
    $query=("insert into participater values('$id','$fname','$lname','$age','$gender','$district','$phone','$verify','$talent','$date')");
$insert=mysqli_query($con,$query);
  if($insert){
   echo "<META http-equiv=refresh content=1;URL=send.php>";
  }
  else{
 echo "<center><font size=4><script>alert('Sorry Your identification has been taken try to enter another identification')</script></font></center>";
  }
  
      }
?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .top{
      margin-top: -900px;
      color: black;
      font-weight: bold;
    }
  </style>
  <title></title>
</head>
<body>
<div style="width:100px;height:40px;margin-top:20">

</table>
</body>
</html>