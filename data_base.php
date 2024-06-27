<?php
$servername='localhost';
$username='root';
$password='';
$databasename='contact_management';
$conn=new mysqli($servername,$username,$password,$databasename);
if($conn->connect_error)
{
    die("Error".mysqli_connect_error());
}
?>