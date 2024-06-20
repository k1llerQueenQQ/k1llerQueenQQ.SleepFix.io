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
        <?php require_once "blocks/header.php" ?>

        <div class="login">
            <div class="container">
                <h1>Диагностика</h1>
                <form method="post" action="lib/analysis1.php">
                    <div class="inline">
                        <div>
                            <input type="text" name="gender" placeholder="Ваш пол?">
                        </div>
                        <div>
                            <input type="text" name="age" placeholder="Сколько вам лет?">
                        </div>
                        <button type="submit">Далее</button>
                    </div>



            </div>
            </form>
        </div>
    </div>
</body>


</html>