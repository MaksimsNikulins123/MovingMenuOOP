<?php  
    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();
      
    if(isset ($_POST['login'])){  
        $email = $_POST['email'];  
        $password = $_POST['password']; 
        $user = $funObj->Login($email, $password); 
        if ($user) {  
            // Registration Success  
           header("location:home.php");  
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
     
}
    
    if(isset ($_POST['signup'])){  
        $name = $_POST['name'];  
        $email = $_POST['email'];  
        $password = $_POST['password'];     
        $email1 = $funObj->isUserExist($email);  
            if(!$email1){  
                $register = $funObj->UserRegister($name, $email, $password);  
                if($register){  
                     echo "<script>alert('Registration Successful')</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }   
    
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <div class="form-background">
        <div id="myContainer">
            <div class="no-account">
                <div class="no-account-content">
                    <h2>Don't have an account?</h2>
                    <p>Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit.
                        Reiciendis, earum quod!
                        Fugiat natus eligendi atque
                        nihil eveniet asperiores consectetur,
                    </p>
                    <div class="sign_up_button">
                        <a onclick="myMoveLeft()"> <img src="img/sign_up_button.png" alt="Sign Up Button"
                                id="sign_up"></a>
                    </div>
                </div>
            </div>
            <div class="have-account">
                <div class="have-account-content">
                    <h2>Have an account?</h2>
                    <p>
                        Lorem ipsum dolor sit, amet
                        consectetur
                    </p>
                    <div>
                        <a onclick="myMoveRight()"> <img src="img/login_button.png" alt="Login Button" id="login"></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="myAnimation">
                <div id="myAnimationGoingRight-content">
                    <form action="" method="POST" id="form2">
                        <h2>
                            Login
                        </h2>
                        <div class="logo">
                            <img src="img/logo.png" alt="Logo">
                        </div>
                        <img src="img/line_under.png" alt="Line under">
                        <div>
                            <h4>
                                Email<span class="color">*</span>
                            </h4>
                            <div class="email_logo">
                                <img src="img/email_logo.png" alt="Email logo">
                            </div>
                            <input type="email" name="email" class="email_input" required="required">
                        </div>
                        <hr>
                        <div>
                            <h4>
                                Password<span class="color">*</span>
                            </h4>
                            <div class="lock_logo">
                                <img src="img/lock.png" alt="Lock logo">
                            </div>
                            <input type="password" name="password" class="password_input" required="required" >
                        </div>
                        <hr>
                        <div>
                            <div class="qwe">
                            <button class="login_buton_two" type="submit" name="login">
                                <img src="img/login_bd.png" alt="Login Button" >
                            </button >
                            </div>
                            <div class="asd">
                                <a href="">
                                    <h6 class="forgot">Forgot?</h6>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="myAnimationGoingLeft-content">
                    <form action="" method="POST" id="form1">
                        <h2>
                            Sign Up
                        </h2>
                        <div class="logo">
                            <img src="img/logo.png" alt="Logo">
                        </div>
                        <img src="img/line_under.png" alt="Line under">
                        <div>
                            <h4>
                                Name<span class="color">*</span>
                            </h4>
                            <div class="name_logo">
                                <img src="img/name_logo.png" alt="Name logo">
                            </div>
                            <input type="text" name="name" class="name_input" required>
                        </div>
                        <hr>
                        <div>
                            <h4>
                                Email<span class="color">*</span>
                            </h4>
                            <div class="email_logo2">
                                <img src="img/email_logo.png" alt="Email logo">
                            </div>
                            <input type="email" name="email" class="email_input" required>
                        </div>
                        <hr>
                        <div>
                            <h4>
                                Password<span class="color">*</span>
                            </h4>
                            <div class="lock_logo2">
                                <img src="img/lock.png" alt="Lock logo">
                            </div>
                            <input type="password" name="password" class="password_input" required>
                        </div>
                        <hr>
                        <div>
                            <div class="qwe">
                            <button class="login_buton_two" type="submit" name="signup">
                                <img src="img/sign_up_bd.png" alt="Login Button">
                            </button >
                                
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>