<?php

include_once("../koneksi.php");

$id = $_GET['user_ID'];

$result = mysqli_query($mysqli, "DELETE FROM user WHERE user_ID=$id");

header("location: index.php");

?>