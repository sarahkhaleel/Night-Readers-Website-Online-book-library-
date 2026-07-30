
<?php
header("Location: user.php");

$db_hostname='localhost';
$db_database='profiles';
$db_username='root';
$db_password='';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error) die($connection->connect_error);
$F_name=$_POST['t1'];
$L_name=$_POST['t2'];
$Email=$_POST['email_box'];
$Password=$_POST['password'];

if(isset($_POST['btn1']))
{
  $query="INSERT INTO identities VALUES('$F_name','$L_name','$Email','$Password')";
  $result=$connection->query($query);

 if($result) echo "data saved";
 else  echo "not saved";
}
session_start();
$_SESSION['username']=$F_name;
$_SESSION['lastname']=$L_name;
$_SESSION['email']=$Email;
$_SESSION['password']=$Password;

    $result->close();
    $connection->close();

 ?>
