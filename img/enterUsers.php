<?php
if (isset($_POST['email'])) 
{ 
    $email = $_POST['email']; 
    if ($email == '') 
    { 
        unset($email);
    } 
} 
    if (isset($_POST['password'])) 
    { 
     $password=$_POST['password']; 
     if ($password =='') 
        { 
         unset($password);
        } 
    }

if (empty($email) or empty($password))
 {
 exit ("Please enter Your Email and Password again!<a href='http://localhost/FirstWebSite/index.html'> go back and fill out the form</a>");
 }

 //checing does email and password are entered
//Убеждаемся, что имя, почта пользователя и пароль предоставляются.  
if (isset($_POST['email']) && isset($_POST['password'])){
    
   //Veriables
    // Переменные с формы
$email = $_POST['email'];
$password = $_POST['password'];

 $email = stripslashes($email);
 $email = htmlspecialchars($email);
 $password = stripslashes($password);
 $password = htmlspecialchars($password);
 $email = trim($email);
 $password = trim($password);

 //Connection settings
// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'megabitdb'; // Имя БД
$db_table = "users"; // Имя Таблицы БД

// Connection to DB
// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// If error connection kill connection and show error
// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
     

  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$sql_p = "SELECT * FROM users WHERE password='$password'";
      $res_e = mysqli_query($mysqli, $sql_e);
      $res_p = mysqli_query($mysqli, $sql_p);
  

  	if (mysqli_num_rows($res_e) > 0 && mysqli_num_rows($res_p) > 0) {
        echo "Your entering your account <a href='http://localhost/FirstWebSite/index.html'> go back</a>";	
  	}else {
        exit ("You should to sign up!<a href='http://localhost/FirstWebSite/index.html'> go back</a>"); 
  	}


}

 
?>
