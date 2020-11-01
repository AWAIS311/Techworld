<?php

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="collage";

$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname) or die ('Mysqli connection error'.mysqli_connect_error());



?>