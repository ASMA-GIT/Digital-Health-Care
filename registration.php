<?php

session_start();
header('location:login.php');

$conn=mysqli_connect('localhost','id19147523_healthierwedb','Db/0987654321');
mysqli_select_db($conn, 'id19147523_user_credentials');
$name=$_POST['name']
$pwd=$_POST['password']

$v="SELECT * FROM logintable where name = '$name'";
$result= mysqli_query($conn,$v)
$num= mysqli_num_rows($result)

if($num==1)
{
    echo"username not available";
}else{
    $reg="insert into logintable(name, password) values ('$name', '$pwd')";
    mysqli_query($conn, $reg);
    echo"Registration successful";
}
?>
