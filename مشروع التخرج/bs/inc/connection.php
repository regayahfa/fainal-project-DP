<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bs";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{

	die("failed to connect!");
}

//$sql = "INSERT INTO `users` (`full Name`, `id number`, `phone`, `password`, `e-mail`, `age`, `gender`, `weight`, `lengith`, `date of birth`, `program`, `subscription`) VALUES ('maal', '566', '4242', '535353', 'ahmed@gmail.com', '15-25', 'male', '50', '170', '2022-10-04', 'fitt', '1 month')";
//mysqli_query($con, $sql);

?>
