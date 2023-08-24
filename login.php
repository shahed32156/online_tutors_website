<?php

$email=$_POST['email'];
$password=$_POST['pass'];

$con = new mysqli("localhost","root","","idp");

if ($conn->connect_error)
{

    die("Failed to connect" .$conn->connect_error);
    
}

else {

    $stmt=$conn->prepare ("select * from login where email=?");
    $stmt=$bind_param ("s",$email);
    $stmt->execute ();
    echo "Successfully log in.";
    $stmt->close ();
    $conn->close ();
    //$stmt_result=$stmt->get_result ();

}



?>