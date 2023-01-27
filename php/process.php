<?php
$conn=new mysqli("localhost","EDavid","Edso8939!","pizza_kingdom");

$sql_select="select * from customers";
$result=$conn->query($sql_select);

if($result->num_rows>0)
{      
    echo'<table border=1">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Location</th>
        <th>password</th>
        <th>prefferedPayment</th>
        <th>Pick up location</th>
        <th>username</th>
    </tr>';

   

    while($row=$result->fetch_assoc()){
        $rows[]=$row;
        echo'<tr>
            <td>'.$row["FirstName"].'</td>
            <td>'.$row["LastName"].'</td>
            <td>'.$row["Locations"].'</td>
            <td>'.$row["Passwords"].'</td>
            <td>'.$row["prefferedPayment"].'</td>
            <td>'.$row["prefferedPLocation"].'</td>
            <td>'.$row["userName"].'</td>
        </tr>';
    }
            echo "</table>";
}
        
    
   
    
    //print_r($rows);
    
      
?>