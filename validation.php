<?php

session_start();


$conn=mysqli_connect('localhost','id19147523_healthierwedb','Db/0987654321');
mysqli_select_db($conn, 'id19147523_user_credentials');
$name=$_POST['name']
$pwd=$_POST['password']

$v="SELECT * FROM logintable where name = '$name' && password ='$pwd' ";
$result= mysqli_query($conn,$v)
$num= mysqli_num_rows($result)

if($num==1)
{
    echo"login successful";
}else{
    echo"name or password is wrong";
    header('location:registration.php');
}
?>
