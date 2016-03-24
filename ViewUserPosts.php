<?php
$myselect = $_POST["myselect"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "akimani", "1Guthondeka.", "akimani");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo"Posts made by ".$myselect." <br><br>";
echo '<table border="1" style= "width=100%" >';
echo "<td> Post_id</td> <td> Content </td> <tr>";
if($result = $mysqli->query("select post_id, content, author_id from Posts join Users on Posts.author_id=Users.user_id"))
{
    while($row = $result->fetch_assoc())
    {
        if($row["author_id"] == $myselect)
        {
            echo"<td>". $row["post_id"]. "</td>";
            echo"<td>". $row["content"]. "</td>";
            echo"<tr>";
        }
    }

    $result->free();
    $row->free();
}

$mysqli->close();


?>
