<?php

session_start();

$sell = isset($_SESSION['display']) ? $_SESSION['display'] :array();


        
    include('sell.php');
    session_start();
    @$name = $_POST['Name'];
    @$email = $_POST['Email'];
    @$password = $_POST['password'];
    @$mobile = $_POST['mobile'];
    @$active = 1;
    $response = array();

   
    $query = "INSERT INTO user (U_name,U_email,U_password,U_mobile,U_active) 
  		  VALUES('$name', '$email','$password','$mobile','$active')";
echo $query;
//exit();
   // $result = mysqli_query($conn, $query);
//$result == 1
    
    if(mysqli_query($conn, $query))
    {
  
       // echo mysqli_error($conn);
	$response['status']=1;
     $_SESSION['username'] = $email;
        $_SESSION['success'] = "You are now logged in";
        $response['message']="Registartion Successful";
	echo json_encode($response);
   header("location:./index.php");
    }

    else
    {
  
        //echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="Registartion Not successful";
	echo json_encode($response);
        
    }

?>