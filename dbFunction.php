<?php  
require_once 'dbConnect.php';  
session_start();  
    class dbFunction extends dbConnect { 
       
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();  
        }  
        //destructor  
        function __destruct() {  
              
        }  
        public function UserRegister($name, $email, $password){  
                $conn = parent::__construct();  
                $qr = mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('".$name."','".$email."','".$password."')") or die(mysqli_error());  
                return $qr;  
               
        }  
        public function Login($email, $password){
            $conn = parent::__construct();
            $qr = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
            //$user_data_email = mysqli_real_escape_string($con,$email);
            $row = mysqli_fetch_row($qr); 
            if($row > 0){
                    $_SESSION['login'] = true;  
                    $_SESSION['id'] = $user_data['id'];  
                    $_SESSION['name'] = $user_data['name'];  
                    $_SESSION['email'] = $user_data['email'];  
                    return TRUE;  
                }  
                else  
                {  
                    return FALSE;  
                }  
            }
              
            
          
        public function isUserExist($email){ 
            $conn = parent::__construct();
            $qr = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");  
            $row = mysqli_num_rows($qr);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
    }  
?>  