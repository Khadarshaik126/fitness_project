<?php
$severname = "localhost";
$username = "root";
$password ="";
$dbname = "register";
$conn = mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
    echo "connection sucessfull";
}else{
    echo "connection Failed";
}

?>
