<?php

$host="localhost";
$user="root";
$password="";
$db="student";


$conn=new mysqli($host,$user,$password,$db);

if($conn->connect_error)
{
    die($conn->connect_error);
}


?>