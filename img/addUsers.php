<?php 
if (isset($_POST['name'])) 
{ 
    $name = $_POST['name']; 
    if ($name == '') 
    { 
        unset($name);
    } 
} 
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

if (empty($name) or empty($email) or empty($password))
 {
 exit ("Please enter Your Name, Email and Password again!<a href='http://localhost/FirstWebSite/index.html'> go back and fill out the form</a>");
 }


 

//checing does name, email and password are entered
//Убеждаемся, что имя, почта пользователя и пароль предоставляются.  
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    
   //Veriables
    // Переменные с формы
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$name = stripslashes($name);
 $name = htmlspecialchars($name);
 $email = stripslashes($email);
 $email = htmlspecialchars($email);
 $password = stripslashes($password);
 $password = htmlspecialchars($password);
 $name = trim($name);
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
        


$result = $mysqli->query("INSERT INTO ".$db_table." (name,email,password) VALUES ('$name','$email','$password')");

if ($result == true){   
    exit ("You are sign up!<a href='http://localhost/FirstWebSite/index.html'> go back</a>");
}else{
    echo "Your e-mail just exist <a href='http://localhost/FirstWebSite/index.html'> go back</a>";
}



}





?>