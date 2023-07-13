<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>login</title>

  <!-- main style -->

  <link rel="stylesheet" href="./css/style2.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!--login-->

<body>

  <div class="container">
    <form action="login.php" method= "POST">
      <div class="title">Login</div>
      <div class="input-box underline">
        <input type="text" name="Email" placeholder="Enter Your Email" required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="password" name="Password" placeholder="Enter Your Password" required>
        <div class="underline"></div>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Continue">
      </div>
    </form>
    <div class="checkbox-text">
      <div class="checkbox-content">
        <input type="checkbox" id="logCheck">
        <label for="logCheck" class="text">Remember me</label> <br>
        <input type="button" name="foget my password" value="foget my password">
        </label>

        <!--transfar to home -->
        <div class="home">
          <a href="./index.html"><i class="home"></i>home Page</a>
        </div>
        <!--transfar to sign up -->

        <div class="Member">
          <a href="./index3.php"><i class="fab fa-twitter"></i>Be A Member</a>
        </div>




</body>


</html>