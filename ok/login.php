<!-- <?php
include('config.php');
if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $userid = $_POST['userid'];
$password = ($_POST['password']);
if(mysqli_num_rows(mysqli_query($connect,"select * from register where userid='$userid'"))>0){
    // echo 'username already exist';
}else{
  $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
    mysqli_query($connect, "insert into register(fullname,email,userid,password) values('$fullname','$email','$userid','$password') ");
    // echo "Registration Successfully!"; 
}
}
?> -->









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    
    <div class="hero">
        <div class="form-box">
            <h1 class="heading">Furniture for future</h1>
            <p font-color="black">Decorate your Life with Arts</p>
            <div class="button-box">
                
                <div id="btn"></div> 
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn"onclick="register()">Register</button>
            </div>
            
            <div class="social-icons">
                <img src="images/fb.png">
                <img src="images/tw.png ">
                <img src="images/ins.png">      
            </div>
            <!-- <form id="login" class="input-group" method="POST"> -->
            <form id="login" class="input-group" action="process_login.php" method="POST">

                <input type="int" class="input-field" name="userid" placeholder="User Id number" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="chech-box"> <span>Remember Password</span>
                <button type="submit" name="submit" class="submit-btn">Log in</button>
            </form>
            <form id="register" class="input-group" action="register.php" method="POST">
            <!-- <form id="register" class="input-group" method="POST"> -->
        
                <input type="text" class="input-field" name="fullname"placeholder="Full Name" required>
                <input type="email" class="input-field" name="email" placeholder="Email Id" required>
                <input type="int" class="input-field" name="userid" placeholder=" Create User Id number" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="chech-box"> <span>I agree to the terms and condition</span>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register(){
            x.style.left= "-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
</body>
</html>