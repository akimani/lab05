<?php
$user = $_POST["user"];
$posta = $_POST["posta"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "akimani", "1Guthondeka.", "akimani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$result = $mysqli->query("select user_id from Users where user_id = '$user'");
$row = $result->fetch_assoc();


if((strlen($posta) > 0) && ($row["user_id"] == $user))
{
    if ($result = $mysqli->query("insert into Posts(post_id,content,author_id) values('', '$posta', '$user')"))
    {
        printf("Successfully added the post <br>");
        $result->free();
        $row->free();
    }
}
else
{
    printf("Failed to add the post");
}

$mysqli->close();
?>
