<?php

        
    include ("sell.php");
    
    session_start();

    
    @$email = $_POST['email'];
    @$password = $_POST['password'];
   
   $response = array();

   $sqlquery = "select * from user where U_email='$email' and U_password='$password'"; 
   //echo $sqlquery;
   
   $result=mysqli_query($conn, $sqlquery);
   $row=mysqli_num_rows($result);

   
   if($row == 1)
    {
      
        while($row = mysqli_fetch_array($result))
        {
          @$sell11 = array('id'=>$row['U_id'],'name'=>$row['U_name'],'email'=>$row['U_email']);
        }
        //echo mysqli_error($conn);
  $_SESSION['display'] = $sell11;
	header("location:./homepage.php");
	exit();
        //$response['status']=1;

	//$response['message']="Login Successful";
	
        //echo json_encode($response);	

    }

    else
    {
  
       // echo mysqli_error($conn);
	
        $response['status']=0;
	
        $response['message']="Login Not successful";
	header("location:./index.php?flag=false");
        echo json_encode($response);
      
  
    }
?>