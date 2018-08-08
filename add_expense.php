<?php

session_start();

include("sell.php");

include("check_session.php");


            $query = "select * from trip";

            $s = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($s)) {
                
                $T_id = $row['T_id']; 

if(isset($_SESSION)) 
{
    
    @$expense_category = $_POST['framework'];

    @$expense_name = $_POST['exapensename'];

    @$expense_amount = $_POST['expenceamount'];

    @$expense_date = $_POST['date']; 

    @$trip_id = $T_id;

    @$user_id = $_SESSION['current_user_id'];


    $s1 = $_SESSION['display']['id'];

    $insert_expense_sql = "INSERT INTO trip_expenese (T_id, U_id, E_name, E_date,E_amount, C_id) VALUES ('$trip_id', '$user_id', '$expense_name', '$expense_date', '$expense_amount', '$expense_category')";

    echo $insert_expense_sql;

    @$result = mysqli_query($conn, $insert_expense_sql);

    echo $result;

    if ($result > 0)

    {

        header("Location: ./ourtrip.php?t_id=$trip_id&status=SUCCESS");
    } 

    else 

    {
        echo mysqli_error(@$connection);
    
        exit();
    
        header("Location: ./ourtrip.php?t_id=$trip_id&status=ERROR");
    
    }

}

else

{

    header("Location: ./login.php?flag=loginfirst");

}

}

?>