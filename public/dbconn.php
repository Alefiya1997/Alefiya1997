<?php

$db = mysqli_connect("localhost","root","","coolblue");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>