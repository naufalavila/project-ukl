<?php

include_once("index.php");

$id = $_GET['user_ID'];

$result = mysqli_query($mysqli, "DELETE FROM user WHERE user_ID=$id");

header("location: index.php");

?>