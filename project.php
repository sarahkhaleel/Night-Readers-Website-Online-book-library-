
<?php
header("Location: user.html");

$db_hostname='localhost';
$db_database='profiles';
$db_username='root';
$db_password='';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error) die($connection->connect_error);
$F_name=$_POST['t1'];
$L_name=$_POST['t2'];
$Email=$_POST['email_box'];
$Passsword=$_POST['password'];

if(isset($_POST['btn1']))
{
  $query="INSERT INTO identities VALUES('$F_name','$L_name','$Email')";
  $result=$connection->query($query);

 if($result) echo "data saved";
 else  echo "not saved";
}
    $result->close();
    $connection->close();

 ?>
