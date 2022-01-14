<?php

$conn = mysqli_connect("localhost", "root", "", "ajax-01") or die("Connection Failed");

$sql = "SELECT * FROM students";
$output = "";
$result = mysqli_query($conn, $sql) or die("SQL query failed");

if(mysqli_num_rows($result) > 0){


    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>';
    while ($row = mysqli_fetch_assoc($result)){
        $output .= "<tr><td>{$row['id']}</td>  <td>{$row['first_name']}  {$row['last_name']}</td> <td><button class='delete-btn' data-id='{$row['id']}'>Delete</button></td></tr>";
    }
    $output .= "</table>";
    mysqli_close($conn);

    echo $output;

}else{
    echo "<h2>No record found</h2>";
}