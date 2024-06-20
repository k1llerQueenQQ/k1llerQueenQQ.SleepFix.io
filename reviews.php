<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepFix</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<?php setcookie("login", "", time() - 3600); ?>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php" ?>

        <div class="login">
            <div class="container">
                <h1>Оставьте отзыв</h1>
                <form method="post" action="lib/rew.php">
                    <div class="inline">
                        <div>
                            <input type="text" name="Name" placeholder= "Ваше имя">
                        </div>
                        <label>"Ваш отзыв(форму можно растянуть)"</label>
                        <div>
                            
                            <textarea name="Text"></textarea>
                        </div>
                        <button type="submit">Отправить</button>
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