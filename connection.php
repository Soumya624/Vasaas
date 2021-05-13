<?php
$servername="localhost";
$username="root";
$password="";
$database="db_name";

$conn=mysqli_connect($servername,$username,$password,$database);
if($conn==NULL)
{
    echo("<center><h3>Connection Failed!</h3></center>");
}
?>