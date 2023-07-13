<?php
include("inc/connection.php");
if(isset($_POST['submit'])){
    $Email = stripcslashes (strtolower($_POST['Email']));
    $Password = stripcslashes ($_POST['Password']);
}

$sql =mysqli_query($con,"SELECT `full Name`,`date of birth`,`subscription`,`program`,`e-mail`,`password` FROM `users` WHERE (`e-mail`='$Email' || `password`='$Password')");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
        session_start();
        $_SESSION['name']=$num['full Name'];
        $_SESSION['date']=$num['date of birth'];
        $_SESSION['period']=$num['subscription'];
        $_SESSION['type']=$num['program'];
        header('location:prov.php');
    }else{
        echo "Something Wrong";
    }

?>