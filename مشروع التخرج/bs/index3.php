
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
        var name1 = document.getElementById("fname").value;
        var em1 = document.getElementById("em1").value;

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


        //check empty password field  
        if (pw1 == "") {
            document.getElementById("message1").innerHTML = "**Fill the password please!";
            return false;
        }


        //minimum password length validation  
        if (pw1.length < 4) {
            document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }

        //maximum length of password validation  
        if (pw1.length > 15) {
            document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
            return false;
        }

    

        //check empty e-mail field  
        if (em1 == "") {
            document.getElementById("message3").innerHTML = "**Fill the e-mail please!";
            return false;
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
<br>
<br>   
<form onsubmit="return validateForm()" action="registerpost.php"  method= "POST">


<!-- php code $$Full_Name_error--> 

<?php if(isset($Name_error)){
    echo $Name_error;
} ?>
        <!-- Enter first name -->
        <td> Name</td>
        <input type="text" name= "Name" id="fname" value="">
        <span id="blankMsg" style="color:red"> </span> <br><br>


<!--php code $id_number_error --> 
<?php if(isset($id_number_error)){
    echo $id_number_error;
} ?>
        <!--id number-->
        <label for="input-field"> id number:</label>
        <input type="text" name= "id_number" placeholder="10******** " required>
        <i class="uil uil-envelope icon"></i> <br><br>

        <!-- phone_error-->

<?php if(isset($phone_error)){
    echo $phone_error;
} ?>
        <!--creat phone number-->
        <label>
            Phone :
        </label>
        <input type="text" name="phone" size="18" /> <br> <br>


        <!--php code $Create_Password_error --> 
        <?php if(isset($Password_error)){
    echo $Password_error;
} ?>
        <!-- Create a new password -->
        <td> Password * </td>
        <input type="password" name="Password" id="pswd1" value="">
        <span id="message1" style="color:red"> </span> <br><br>


<!--php code $Create_Email_error-->
<?php if(isset($Email_error)){
    echo $Email_error;
} ?>
        <!-- Create E-mail  -->
        <td> E-mail </td>
        <input type="text" name="Email" id="em1" value="">
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
            <option> 36-45</option>
            <option> 46-55</option>
            <option> more than 56</option>
        </select> <br><br>



      <!--php code $gender_error-->
      <?php if(isset($gender_error)){
    echo $gender_error;
} ?>
        <!--creat gender-->
        <label for="input-field">gender: </label>
        <select name="gender" size="1">
            <option>Choose your gender </option>
            <option> female </option>
            <option> male </option>
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
        <input type="text" name="lengith" placeholder="exsample:150 " required> <br> <br>


               <!--php code $date_of_birth_error-->
               <?php if(isset($date_of_birth_error)){
    echo $date_of_birth_error;
} ?>   
        <!--creat $date_of_birth_error-->
        <label for="start">date of birth:</label>
        <input type="date" id="start" name="date_of_birth" min="1900-01-01" max="2023-12-31"><br> <br>



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
    <br>
    <br>
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