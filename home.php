<?php
    include_once('dbFunction.php'); 
    
    if(isset ($_POST['welcome'])){  
        // remove all session variables  
        session_unset();   
  
        // destroy the session   
        session_destroy();  
    }  
    if(!($_SESSION)){  
        header("Location:index.php");  
    }  
  ?>
<!DOCTYPE html>  
 <html lang="en" class="no-js">  
 <head>  
        <meta charset="UTF-8" />  
        <title>Login and Registration Form with HTML5 and CSS3</title>  
    </head>  
    <body> 
    
     
        <div class="container">  
            <header>  
                <h1>Welcome Form  </h1>  
            </header>  
            <section>               
                <div id="container_demo" >  
                     
                    <a class="hiddenanchor" id="toregister"></a>  
                    <a class="hiddenanchor" id="tologin"></a>  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="">  
                                <h1>Welcome </h1>   
                                <p>   
                                    <label for="name"  > Your Name </label>  
                                   <?=$_SESSION['name']?>  
                  
                                </p>  
                                <p>   
                                    <label for="email" > Your Email </label>  
                                    <?=$_SESSION['email']?>  
                                </p>  
                                   
                                <p class="login button">   
                                    <input type="submit" name="welcome" value="Logout" />   
                                </p>  
                                   
                            </form>  
                        </div>  
                    </div>  
                </div>    
            </section>  
        </div>  
    </body>  
</html>  