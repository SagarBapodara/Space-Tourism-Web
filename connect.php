<!--Orginally written by Sagar Bapodara-->


<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    //connection

    $conn = new mqsqli('localhost','root','','space');
    if($conn->connect_error){
    	die('Connection Failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into space(email, password)");
    	$stmt->bind_param("ss",$email,$password);
    	$stmt->execute();
    	echo "Registration Sucess";
    	$stmt->close();
    	$conn->close();
    }
?>

