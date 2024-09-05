<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & register</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="container"id="signup" style="display:none">
    <h1 class="form-title" >Register</h1>
    <form method="post" action="register.php">
    <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lastName" id="lastName" placeholder="lastName" required>
          <label for="lastName">First Name</label>
    </div>

    <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="lastName" id="lastName"placeholder="lastName" required>
    <label for="lastName">Last Name</label>
    </div>

    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="text" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>

    <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="Password">Password</label>
    </div>
    <input type="submit"class="btn" value="Sign Up" name="Signup">

    </form>
    <p class="or">------------or------------</p>

    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>

    <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
    </div>
    </div>
<!--sign in-->

<div class="container" id="signIn">
    <h1 class="form-title">Sign  In</h1>
    <form method="post" action="register.php">
        <div class="input-group" >
            <i class="fas fa-user"></i>
            <input type="email" class="email" id="email" placeholder="Email" required>
            <label for="email"> Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" clase="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <p class="recover">
        <a href="£">  Recover Password</a>
        </p>

        <input type="submit" class="btn" id="signIn" name="signIn" value="Sing In">
        <p class="or"></p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>

        <div class="links">
            <p> Don't have account yet?</p>
            <button id="signUpButton"> Sign Up</button>
        </div>


        
    </form>
</div>
<script src="../js/index.js"></script>

</body>
</html>