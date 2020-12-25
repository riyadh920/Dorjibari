<?php include('Control.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/riad.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
<body>
    <div class="bgimg">
        <img src="assets/img/index.jpg" alt="">
        <div class="bgBlur"></div>
    </div>
 <div class="loginbox">
    <img src="assets/img/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form class="loginForm" method="post">
        <?php Userlogin()?>
            <div class="loginForm-items">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter Username">
                <span class="loginforminputborder"></span>
            </div>
            <div class="loginForm-items">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Enter Password">
                <span class="loginforminputborder"></span>
            </div>
            <button type="submit" name="login" class="loginbtn" > Login </button>
            
            <br>
            <a href="signup.html" style="display: inline-block; padding: 50px; text-align: center   ;">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>