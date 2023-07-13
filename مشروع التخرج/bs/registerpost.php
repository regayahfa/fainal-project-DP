<?php
include("inc/connection.php");

//variables
if(isset($_POST['submit'])){
  
$Name = stripcslashes (strtolower($_POST['Name']));
$id_number = stripcslashes ($_POST['id_number']);
$phone = stripcslashes ($_POST['phone']);
$Password = stripcslashes ($_POST['Password']);
$Email = stripcslashes (strtolower($_POST['Email']));
    
$age = $_POST['age'];
$gender = $_POST['gender'];
$wieght = stripcslashes ($_POST['wieght']);
$lengith = stripcslashes ($_POST['lengith']);
    
$date_of_birth = $_POST['date_of_birth'];
$program = $_POST['program']; 
$subscribtion = $_POST['subscribtion'];
    
}


//protection
//$Name = htmlentities(mysqli_real_escape_string($con,$_POST['Name']));
//$id_number = htmlentities(mysqli_real_escape_string($con,$_POST['id_number']));
//$phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
//$Password = htmlentities(mysqli_real_escape_string($con,$_POST['Password']));
//$Email = htmlentities(mysqli_real_escape_string($con,$_POST['Email']));

//protection gender
$err_s=0;

if(isset($_POST["gender"])){
$gender = ($_POST["gender"]);
//$gender = htmlentities(mysqli_real_escape_string($conn,$_POST["gender"]));

if(!in_array($gender,['female','male'])){
    $gender_error = '<p id="error" > please choose gender not a text!!<p><br>';
    $err_s = 1;
}
}

//protection age
/*if(isset($_POST["age"])){
    $age = ($_POST["age"]);
    //$age = htmlentities(mysqli_real_escape_string($conn,$_POST["gender"]));
    
    if(!in_array($age,[15-25, 26-35, 36-45, 46-55, 'more than 56'])){
        $age_error = '<p id="error" > please choose age not a text!!<p><br>';
        $err_s = 1;
    }
    }*/
 //protction program
 if(isset($_POST["program"])){
    $program = ($_POST["program"]);
    //$program = htmlentities(mysqli_real_escape_string($conn,$_POST["gender"]));
    
    if(!in_array($program,["fitt", "yoga", "loss weight", "mother hood", "creat your program"])){
        $program_error = '<p id="error" > please choose program not a text!! <p> <br>';
        $err_s = 1;
    }
    } 

//protaction subscribtion
if(isset($_POST["subscribtion"])){
    $subscribtion = ($_POST["subscribtion"]);
    //$subscribtion = htmlentities(mysqli_real_escape_string($conn,$_POST["subscribtion"]));
    
    if(!in_array($subscribtion,["1 month", "3 months", "6 months ", "9 months", "1 year"])){
        $subscribtion_error = '<p id="error" >please choose subscribtion not a text!! <p> <br>';
        $err_s = 1;
    }
    }
     
// if empty Full_Name

if(empty($Name)) {
$Name_error = '<p id="error" >please enter first name <p> <br>';
$err_s = 1;
}
elseif(strlen($Name)< 2){
$Name_error = '<p id="error" > enterd name must be more than 2 letters <p> <br>';
$err_s = 1;
include('inc/connection.php');
}
elseif(filter_var($Name, FILTER_VALIDATE_INT)){
    $Name_error = '<p id="error" > enterd name must be letters <p> <br>';
    $err_s = 1;
    include('inc/connection.php');
}
//check for usbel name
/*
$check_user =  "SELECT * FROM `users` where Full_Name= '$Full_Name' ";
$check_result = mysqli_query($conn, $check_user);
$num_rows = mysqli_num_rows($check_result);

if($num_rows != 0) {
$Full_Name_error = '<p id="error" > sorry full name already exist, try another name <p> <br>';
$err_s = 1;
}*/
 

    // if empty id_number
if(empty($id_number)) {
    $id_number_error = '<p id="error" >please enter id number <p> <br>';
    $err_s = 1;
    }
    elseif(strlen($id_number)< 2){
    $id_number_error = '<p id="error" > enterd ID must be more than 2 numbers <p> <br>';
    $err_s = 1;
    
    }

    //if empty phone
    if(empty($phone)) {
        $phone_error = '<p id="error" >please enter phone number <p> <br>';
        $err_s = 1;
        }
        elseif(strlen($phone)< 2){
        $phone_error = '<p id="error" > enterd phone must be more than 2 numbers <p> <br>';
        $err_s = 1;
        }

// if Create_Password
if(empty($Password)) {
    $Password_error = '<p id="error" >please insert password <p> <br>';
    $err_s = 1;
    }
    elseif(strlen($Password)< 2){
        $Password_error = '<p id="error" >your password must be more than 2 letters <p> <br>';
    $err_s= 1;
    
    }

//if empty Create_Email
if(empty($Email)) {
    $Email_error = '<p id="error" >please insert Email <p> <br>';
    $err_s = 1;
    }
    elseif(strlen($Email)< 2){
    $Email_error = '<p id="error" >your Email must be more than 2 letters <p> <br>';
    $err_s = 1;
    }
    elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $Email_error = '<p id="error" >pleas valid email <p> <br>';
        $err_s = 1;
    }


//if empty gender
if(empty($gender)) {
    $gender_error = "please chose your gender <p> <br>";
    $err_s = 1;
    }

//if empty wieght
if(empty($wieght)) {
    $wieght_error = '<p id="error" >please chose your wieght <p> <br>';
    $err_s = 1;
    }
// if empty lengith
if(empty($lengith)) {
    $lengith_error = '<p id="error" >please insert your lengith <p> <br>';
    $err_s = 1;
    }
//if empty date_of_birth
if(empty($date_of_birth)) {
    $date_of_birth_error = '<p id="error" >please enter your date_of_birth <p> <br>';
    $err_s = 1;
    }
//if empty program
if(empty($program)) {
    $program_error = '<p id="error" >please enter your program <p> <br>';
    $err_s = 1;
    }
//if empty subscribtion
if(empty($subscribtion)) {
    $subscribtion_error = '<p id="error" >please enter your program <p> <br>';
    $error_s = 1;

    //incloude

    include('index3.php');
 }   
if($err_s == 0) { 
$sql = "INSERT INTO `users` (`full Name`, `id number`, `phone`, `password`, `e-mail`, `age`, `gender`, `weight`, `lengith`, `date of birth`, `program`, `subscription`) VALUES ('$Name', '$id_number', '$phone', '$Password', '$Email', '$age', '$gender', '$wieght', '$lengith', '2022-10-04', '$program', '$subscribtion')";
$query=mysqli_query($con, $sql);
if($query)
{
    header('location:index2.php');
}
}
else { 
    include('index3.php');
    $register_error = '<p id="error" >please try agin thers an error <p> <br>';
    echo $register_error;
header('location:index2.html');
}


?>