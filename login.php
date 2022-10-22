
<?php
    @include 'config.php';
    if(isset($_POST["register"])){
       $user_name = $_POST["name"];
       $user_email = $_POST["email"];
       $user_password = $_POST["password"];
       
       $insert = "INSERT INTO users(name,email,password) VALUES('$user_name','$user_email','$user_password')";
        $query = mysqli_query($conn,$insert);
        if($query){
            echo "<script>alert('Created User')</script>";
        }
    }

    if(isset($_POST["login"])){
        $user_email = $_POST["email"];
        $user_password = $_POST["password"];
        $select = mysqli_query($conn, "SELECT * FROM users where email='$user_email' and password='$user_password'");
        // $row = mysqli_fetch_assoc($select);
        if($select->num_rows > 0){
            $row = mysqli_fetch_assoc($select);
            $cookie_name = "user";
            $cookie_value = $row["id"].";".$row["name"].";".$row["email"].";".$row["password"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
            echo "<script>alert('logged in')</script>";
        }else{
            echo "<script>alert('Invalid email / password')</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="logincss.css">
</head>
<body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">


<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
                <h1>Create Account</h1>
                <input name="name" type="text" placeholder="Name" />
                <input name="email" type="email" placeholder="Email" />
                <input name="password" type="password" placeholder="Password" />
                <button name="register" value="register" type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <h1>Sign in</h1>
                <input name="email" type="email" placeholder="Email" />
                <input name="password" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button name="login" type="submit" value="login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="loginjs.js"></script>
</body>
</html>