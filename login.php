<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">

    <style>
        
    </style>
</head>
<body>
    <ul>
    <li><a class="left"><img src="Images/Mainlogo.jpg" width="100" </a></li>
        <li><a class="left" href="http://localhost/getspon/Home_page.php">Home</a></li>
        <li><a class="left" href="#About">About</a></li>
        <li><a class="left" href="#Contact">Contact</a></li>
        <li><a class="right" href="Log out">Log out</a></li>
        <li><a class="right" href="http://localhost/getspon/Signup.php">Sign up</a></li>
        <li><a class="right" href="http://localhost/getspon/login.php">Log in</a></li>

</ul>
    <br><br>
    <div align="center" id="log">
        <h1>Login</h1>
        <img src="Images/login.jpg" height = "150" width="150">
    <form action="action_page.php" method="post" enctype="multipart/form-data" autocomplete="on" >
        <input type = "text"  name = "username" placeholder="Enter user-id" class="input-box" required><br><br>
        <input type="password" name="password" placeholder="Enter password" class="input-box" required><br><br>
    <Text class="right"><a href="http://localhost/getspon/Signup.php">Forgot Password?</a></Text><br><br>
       
<button class="button" type="submit">Login</button><br><br>
<input type="checkbox"  name="remember"> Remember me<br><br>
</form>
   
<Text>Don't have an account? <a href="http://localhost/getspon/Signup.php">Sign Up</a></Text><br><br>

<Text>-------------------------OR-------------------------</Text><br><br>

<button class="loginwithg-button">Login with Google</button>
<button class="loginwithf-button">Login with Facebook</button>
    </div>

</body>
</html>
