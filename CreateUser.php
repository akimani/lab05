<?php
$user = $_POST["user"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "akimani", "1Guthondeka.", "akimani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if(strlen($user) > 0)
{
    if ($result = $mysqli->query("insert into Users(user_id) values('$user')"))
    {
        printf("Successfully added user ".$user."<br>");
        $result->close();
    }
    else
    {
        printf("Failed to add user ".$user."<br>");
    }

}
else
{
    printf("Failed to add user ".$user."<br>");
}

$mysqli->close();
?>
