<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "akimani", "1Guthondeka.", "akimani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if($result = $mysqli->query("select * from Users"))
{
    while($row = $result->fetch_assoc())
    {
        echo"<td>". $row["user_id"]. "</td>";
        echo"<tr>";
    }

    $result->free();
    $row->free();
}

$mysqli->close();


?>
