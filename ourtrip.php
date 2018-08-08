<?php
session_start();

$sell = isset($_SESSION['display']) ? $_SESSION['display'] :array();
        

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "take_a_trip");
//include('sell.php');
// Check connection
if ($link === false) 
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = 'SELECT * FROM trip ';
//$sql = 'SELECT  * FROM userdata FULL JOIN  trip ON u_id = trip.trip t_email WHERE u_id IS NOT NULL OR trip.t_email IS  NULL';
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        echo "<table>";
        echo "<tr>";
        echo "<th>T_id</th>";
        echo "<th>T_name</th>";   
        echo "<th>T_sd</th>";
        echo "<th>T_ed</th>";
        echo "<th>T_image</th>";
        echo "<th>T_creator</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) 
        {
            echo "<tr>";
            echo "<td>" . $row['T_id'] . "</td>";
            echo "<td>" . $row['T_name'] . "</td>";
            echo "<td>" . $row['T_sd'] . "</td>";
            echo "<td>" . $row['T_ed'] . "</td>";
            echo "<td>".$row['T_image']."</td>";
            echo "<td>" . $row['T_creator']."</td>";
            /* echo "<td>" . $row[''] . "</td>"; */
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>