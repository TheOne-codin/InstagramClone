<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-auth.js"></script>
    <script src="https://kit.fontawesome.com/34b3196d65.js" crossorigin="anonymous"></script>
    <title>Instagram Clone</title>
</head>

<body>
    <div class="LoginScreen">
        <div class="loginImage">
            <img src="https://www.pngitem.com/pimgs/m/109-1091605_instagram-cell-phone-png-transparent-png.png" alt="">
        </div>
        <div class="loginForm">
            <div class="signinPart">
                <p class="Logo">Instagram</p>
<<<<<<< HEAD
                <form action='db.php' method='post' class="inputs">
                    <input type="text" id='SignInEmail' name='email' class="Email" placeholder="phone number, email or username">
                    <input type="password" id='SignInPassword' name='password' placeholder="Password">
                    <button type='submit' class="LoginBtn" onclick="SignIn()">Log In</button>
                    <span>
                        <p> -- OR --</p>
                    </span>
                </form>
=======
                <div class="inputs">
                    <input type="text" id='SignInEmail' class="Email" placeholder="phone number, email or username">
                    <input type="password" id='SignInPassword' placeholder="Password">
                    <button class="LoginBtn" onclick="SignIn()">Log In</button>
                    <span>
                        <p> -- OR --</p>
                    </span>
                </div>
>>>>>>> f91dccef8de01cf24f9dd89bbec9d44df016ce8f
                <div class="loginFormFooter">
                    <p><i class="fab fa-facebook-square"></i> Login With Facebook</p>
                    <p>forgot password?</p>
                </div>
            </div>
            <div class="signUpPart">
                <span>Don't have an account? &nbsp;</span>
<<<<<<< HEAD
                <p class="SignUpBtn"><a href="SignUp.php">Sign Up</a></p>
=======
                <p class="SignUpBtn"><a href="/SignUp.html">Sign Up</a></p>
>>>>>>> f91dccef8de01cf24f9dd89bbec9d44df016ce8f
            </div>
        </div>
    </div>
    <script src="js/firebaseConfig.js"></script>
</body>

<<<<<<< HEAD
<?php 
include 'js/firebaseAuth.php'
?>

</html>
=======



<script src="js/firebaseAuth.js"></script>

</html>
>>>>>>> f91dccef8de01cf24f9dd89bbec9d44df016ce8f
