<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/signup.css">
</head>
<body>
    <div class="container">
        <div class="form signup">
            <h2>Sign Up</h2>
            <form method="POST" action="signup.php">
            <div class="inputBox">
                <input type="text" name="username" required>
                <i class="fa-regular fa-user icons"></i>
                <span>Username</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email" required autocomplete="email">
                <i class="fa-regular fa-envelope icons"></i>
                <span>Email Address</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required" >
                <i class="fa-solid fa-lock icons"></i>
                <span>Create Password</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
                <i class="fa-solid fa-lock icons"></i>
                <span>Confirm Password</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Create Account">
            </div>
            <h3>Or</h3>
            <div class="inputBox google">
                    <i class="fa-brands fa-google"></i>
                <input type="submit" value="Sign Up with Google">
            </div>
            <p>Already have an account ? <a href="#" class="login">Log In</a></p>
        </div>
        <div class="form signin">
            <h2>Sign In</h2>
            <div class="inputBox">
                <input type="text" required="required" autocomplete="username">
                <i class="fa-regular fa-user"></i>
                <span>Username</span>
            </div>

            <div class="inputBox">
                <input type="password" required="required" autocomplete="current-password">
                <i class="fa-solid fa-lock"></i>
                <span>Password</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Login">
            </div>
            <h3>Or</h3>
            <div class="inputBox google">
                    <i class="fa-brands fa-google"></i>
                <input type="submit" value="Log in with Google">
            </div>
            <p>Don't have an account ? <a href="#" class="create">Sign Up</a></p>
        </div>
    
    </div>
    
    <script>
        let login = document.querySelector('.login');
        let create = document.querySelector('.create');
        let container = document.querySelector('.container');

        login.onclick = function(){
            container.classList.add('signinForm')
        }
        create.onclick = function(){
            container.classList.remove('signinForm')
        }
    </script>

</body>
</html>
