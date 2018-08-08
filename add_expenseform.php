<!DOCTYPE html>
<html>
    <head>
        <title>Registration page of trip</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: lightgreen;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: green;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}

.form input[type=submit]
{
    background-color: green;
}
.form input[type=submit]:hover
{
    background-color:green;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

body {
  background:url(../trip1/Image/Jaisalmer3.jpg);     
}
</style>
    </head>
    <body>
        <div class="login-page">
  <div class="form" >
         
         
           <select id="framework" name="framework[]" multiple class="form-control" >
          <?php
              include('sell.php');
              $tabledata="select C_id, C_name FROM catogary";
              $result=mysqli_query($conn,$tabledata);
            while($record=mysqli_fetch_array($result))  
              {
          ?> 
          <option value="<?php echo $record['C_id']; ?>"> <?php echo $record['C_name']; ?> </option>
               <?php      
              }

                  ?></select> <br><br>
         <form name="form" action='add_expense.php' method='POST'>
         <input type="text" name="exapensename" placeholder="Exapense Name"/>
     	   <input type="double" name="expenceamount"  placeholder="Exapense Amount"/>
     	   <input type="date" name="date" placeholder="Exapense Date"/>
    	
       
      	 <input type="submit" name="add_expense" value="UPDATE" />
         
         </form>
          
  </div>
</div>
    </body>
</html>

<!--
         <br>
        <br>
        <br>
    <center>
        <form action="register.php" method="post"> 
        <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="Name" required><br>
      <br>
      
      <label for="Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required><br>
      <br>
      
      <div>
          <label for="password"><b>password</b></label>&nbsp;&nbsp;&nbsp;</div><div>
      <input type="password" placeholder="Enter Password" name="password" required><br>
      <br>
      </div>

      <label for="mobile">mobile</label>
      <input type="text" placeholder="Enter mobile" name="mobile" required><br>
      <br>
        
      <button type="submit" onclick="parent.location.href='loginform.php'" onerror="">Register</button>
          
        </form> -->