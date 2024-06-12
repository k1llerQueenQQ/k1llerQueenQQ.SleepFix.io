<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SleepFix</title>
     <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="wrapper">
    <?php require_once "blocks/header.php"?>   

        <div class="login">
            <div class="container">
                <h1>Вход</h1>
                <form method="post" action="lib/authorization.php">
                    <div class="inline">
                        <div>
                            <input type="text" placeholder="E-mail">
                        </div>
                        <div>
                            <input type="password" placeholder="Пароль"> 
                        </div>
                        <button type="submit">Вход</button>
                            <div><a href="reg.php">Нет аккауната? Зарегестрироваться</a>
                        </div>
                        
                        
                    </div>
                </form>
            </div>    

        </div>  
        <div class="hero container">
        </div>

    </div>
</body>


</html>