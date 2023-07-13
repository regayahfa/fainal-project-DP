<?php
include("inc/connection.php");
?>
<html>

<head>
    <title> signup </title>

     <!-- Main Style -->
     <link rel="stylesheet" href= "css/style.css">
</head>
<script>
    function validateForm() {
        //collect form data in JavaScript variables  
        var pw1 = document.getElementById("pswd1").value;
        var pw2 = document.getElementById("pswd2").value;
        var name1 = document.getElementById("fname").value;
        var name2 = document.getElementById("lname").value;
        var em1 = document.getElementById("em1").value;
        var em2 = document.getElementById("em2").value;

        //check empty first name field  
        if (name1 == "") {
            document.getElementById("blankMsg").innerHTML = "**Fill the first name";
            return false;
        }

        //character data validation  
        if (!isNaN(name1)) {
            document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";
            return false;
        }

        //character data validation  
        if (!isNaN(name2)) {
            document.getElementById("charMsg").innerHTML = "**Only characters are allowed";
            return false;
        }

        //check empty password field  
        if (pw1 == "") {
            document.getElementById("message1").innerHTML = "**Fill the password please!";
            return false;
        }

        //check empty confirm password field  
        if (pw2 == "") {
            document.getElementById("message2").innerHTML = "**Enter the password please!";
            return false;
        }
        //minimum password length validation  
        if (pw1.length < 8) {
            document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }

        //maximum length of password validation  
        if (pw1.length > 15) {
            document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
            return false;
        }

        if (pw1 != pw2) {
            document.getElementById("message2").innerHTML = "**Passwords are not same";
            return false;
        } else {
            alert("Your password created successfully");
            document.write("JavaScript form has been submitted successfully");
        }

        //check empty e-mail field  
        if (em1 == "") {
            document.getElementById("message3").innerHTML = "**Fill the e-mail please!";
            return false;
        }

        //check empty confirm e-mail field  
        if (em2 == "") {
            document.getElementById("message4").innerHTML = "**Enter the e-mail please!";
            return false;
        }

        // matshing email
        if (em1 != em2) {
            document.getElementById("message3").innerHTML = "**E-mail are not same";
            return false;
        } else {
            alert("Your e-mail created successfully");
            document.write("JavaScript form has been submitted successfully");
        }
    }  
</script>

<body>
    <nav id="navbar" class="bg-dark">
        <h5 id="time"></h5>

        <div class="logo">
            <a href="" alt="be-sporty-logo"></a>
            <h1 style="color: rgb(163, 54, 230);">Registration</h1>

        </div>


    </nav>

<!--form &phppost-->
    <form onsubmit="return validateForm()" action= "registerpost.php"  method= "POST">


<!-- php code $First_Name_error--> 

<?php if(isset($First_Name_error)){
    echo $First_Name_error;
} ?>
        <!-- Enter first name -->
        <td> First Name </td>
        <input type="text" name= "First_Name" id="fname" value="">
        <span id="blankMsg" style="color:red"> </span> <br><br>


<!--php code $Last_Name_error --> 
<?php if(isset($Last_Name_error)){
    echo $Last_Name_error;
} ?>
        <!-- Enter last name -->
        <td> Last Name </td>
        <input type="text" name= "Last_Name" id="lname" value="">
        <span id="charMsg" style="color:red"> </span> <br><br>


<!--php code $id_number_error --> 
<?php if(isset($id_number_error)){
    echo $id_number_error;
} ?>
        <!--id number-->
        <label for="input-field"> id number:</label>
        <input type="text" name= "id_number" placeholder="10******** " required>
        <i class="uil uil-envelope icon"></i> <br><br>

        <!-- $country_code_error & $phone_error-->
        <?php if(isset($country_code_error)){
    echo $country_code_error;
} ?>

<?php if(isset($phone_error)){
    echo $phone_error;
} ?>
        <!--creat phone number-->
        <label>
            Phone :
        </label>
        <input type="text" name="country_code" value="+966" size="6" />
        <input type="text" name="phone" size="18" /> <br> <br>


        <!--php code $Create_Password_error --> 
        <?php if(isset($Create_Password_error)){
    echo $Create_Password_error;
} ?>
        <!-- Create a new password -->
        <td> Create Password * </td>
        <input type="password" name="Create_Password" id="pswd1" value="">
        <span id="message1" style="color:red"> </span> <br><br>

        <!--php code $confirm_Password_error--> 
        <?php if(isset($confirm_Password_error)){
    echo $confirm_Password_error;
} ?>
        <!--Enter confirm password -->
        <td> Confirm Password* </td>
        <input type="password" name="confirm_Password" id="pswd2" value="">
        <span id="message2" style="color:red"> </span> <br><br>


<!--php code $Create_Email_error-->
<?php if(isset($Create_Email_error)){
    echo $Create_Email_error;
} ?>
        <!-- Create E-mail  -->
        <td> Create E-mail </td>
        <input type="text" name="Create_Email" id="em1" value="">
        <span id="message3" style="color:red"> </span> <br><br>


        <!--php code $Create_Email_error-->
        <?php if(isset($confirm_Email_errorr)){
    echo $confirm_Email_error;
} ?>
        <!--Enter confirm E-mail -->
        <td> Confirm E-mail* </td>
        <input type="text" name="confirm_Email" id="em2" value="">
        <span id="message3" style="color:red"> </span> <br><br>


        <!--php code $age_error-->
        <?php if(isset($age_error)){
    echo $age_error;
} ?>
        <!--creat age-->
        <label for="input-field">your age?</label>
        <select name="age" size="1">
            <option> Choose your age</option>
            <option> 15-25</option>
            <option> 26-35</option>
            <option> 36-40</option>
            <option> 41-50</option>
            <option> more than 51</option>
        </select> <br><br>



      <!--php code $gender_error-->
      <?php if(isset($gender_error)){
    echo $gender_error;
} ?>
        <!--creat gender-->
        <label for="input-field">gender: </label>
        <select name="gender" size="1">
            <option>Choose your gender </option>
            <option> female</option>
            <option> male</option>
        </select> <br><br>


         <!--php code $wieght_error-->
         <?php if(isset($wieght_error)){
    echo $wieght_error;
} ?>     
        <!--creat wieght-->
        <label for="input-field"> weight:</label>
        <input type="text" name="wieght" placeholder="enter your weight" required> <br> <br>



         <!--php code $lengith_error-->
         <?php if(isset($lengith_error)){
    echo $lengith_error;
} ?> 
        <!--creat lengith-->
        <label for="input-field"> lengith:</label>
        <input type="text" name="lengith" placeholder="exsample:1.50 " required> <br> <br>


               <!--php code $date_of_birth_error-->
               <?php if(isset($date_of_birth_error)){
    echo $date_of_birth_error;
} ?>   
        <!--creat $date_of_birth_error-->
        <label for="start">date of birth:</label>
        <input type="date" id="start" name="date_of_birth" value="yyyy-mm-dd" min="1900-01-01" max="2023-12-31"><br> <br>



 <!--php code $program_error-->
 <?php if(isset($program_error)){
    echo $program_error;
} ?>       
        <!--slect program-->
        <label for="input-field">select a program?</label>
        <select name="program" size="1">
            <option>Choose your program </option>
            <option> fitt </option>
            <option> yoga </option>
            <option> loss weight </option>
            <option> mother hood </option>
            <option>creat your program</option>
        </select> <br> <br>




       <!--php code $subscribtion_error-->
 <?php if(isset($subscribtion_error)){
    echo $subscribtion_error;
} ?>  
        <!--creat subscribtion-->
        <label for="input-field">Subscription period:</label>
        <select name="subscribtion" size="1">
            <option>Choose your subscribtion </option>
            <option> 1 month </option>
            <option> 3 months </option>
            <option> 6 months </option>
            <option> 9 months </option>
            <option> 1 year </option>
        </select><br> <br>


        <!-- Click to verify valid password -->
        <input type="submit" name= "submit" value="submit">


    </form>


    <!-- footer-->
    <footer style=" background-color: #252A34; color:aliceblue">
        All rights &copy; reserved to Be Sporty Be Healthy Holding Company 2022
    </footer>

    Current Time: <span id="txt"></span>  
    <script style=" background-color: #252A34; color:aliceblue">  
    window.onload=function(){getTime();}
    function getTime(){  
    var today=new Date();  
    var h=today.getHours();  
    var m=today.getMinutes();  
    var s=today.getSeconds();  
    // add a zero in front of numbers<10  
    m=checkTime(m);  
    s=checkTime(s);  
    document.getElementById('txt').innerHTML=h+":"+m+":"+s;  
    setTimeout(function(){getTime()},1000);  
    }  
    //setInterval("getTime()",1000);//another way  
    function checkTime(i){  
    if (i<10){  
      i="0" + i;  
     }  
    return i;  
    }  
    </script>  



</body>

</html>