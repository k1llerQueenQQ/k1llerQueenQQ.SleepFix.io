<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SleepFix</title>
     <link rel="stylesheet" href="/css/reg.css">
</head>

<body>
    <div class="wrapper">
         <?php require_once "blocks/header.php"?>

        <div class="login">
            <div class="container">
                <h1>Регистрация</h1>
                <form method="post" action="lib/registration.php">
                    <div class="inline">
                        <div>
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Пароль">
                        </div>
                        <div>
                            <input type="password" name="password2" placeholder="Повторите пароль"> 
                        </div>
                        <div>
                            <p><input type="checkbox" value="Yes" name="UA"/>Принимаю условия пользовательского соглашения</p>
                        </div>
                        <button type="submit">Регистрация</button>
                            <div><a href="login.php">Уже есть аккаунт? Войдите</a>
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