<?php
$checked = $_POST["check"];

$todelete = implode("','",$checked);
echo$todelete;

$mysqli = new mysqli("mysql.eecs.ku.edu", "akimani", "1Guthondeka.", "akimani");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if($result = $mysqli->query("delete from Posts where post_id in ('$todelete')"))
{
    printf("deleted the posts");
}


?>
