<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepFix</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<?php setcookie("Simptoms", "", time() - 3600); ?>
<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php" ?>

        <div class="login">
            <div class="container">
                <h1>Диагностика</h1>
                <form method="post" action="lib/analysis2.php">
                    <div class="questions">

                        <div class="radio">
                            <h3>На засыпание уходит более 30 минут?</h3>
                            <input label="Да" type="radio" id="yes" name="question1" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question1" value="0">
                        </div>
                        <div class="radio2">
                            <h3>Ночные и ранние утренние пробуждения, после которых на засыпание требуется более 30
                                минут</h3>
                            <input label="Да" type="radio" id="yes" name="question2" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question2" value="0">
                        </div>
                        <div class="radio3">
                            <h3>Потеря энергии</h3>
                            <input label="Да" type="radio" id="yes" name="question3" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question3" value="0">
                        </div>
                        <div class="radio4">
                            <h3>Раздражительность</h3>
                            <input label="Да" type="radio" id="yes" name="question4" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question4" value="0">
                        </div>
                        <div class="radio5">
                            <h3>Подавленное состояние</h3>
                            <input label="Да" type="radio" id="yes" name="question5" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question5" value="0">
                        </div>
                        <div class="radio6">
                            <h3>Храп</h3>
                            <input label="Да" type="radio" id="yes" name="question6" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question6" value="0">
                        </div>
                        <div class="radio7">
                            <h3>Остановки дыхания или удушье во сне</h3>
                            <input label="Да" type="radio" id="yes" name="question7" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question7" value="0">
                        </div>
                        <div class="radio8">
                            <h3>Трудности засыпания в социально-приемлемое время, более чем на два часа отличающееся от
                                фактического</h3>
                            <input label="Да" type="radio" id="yes" name="question8" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question8" value="0">
                        </div>
                        <div class="radio9">
                            <h3>Различные действия и ощущения, возникающие во время сна</h3>
                            <input label="Да" type="radio" id="yes" name="question9" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question9" value="0">
                        </div>
                        <div class="radio10">
                            <h3>Необходимость подвигать ногами или походить перед сном</h3>
                            <input label="Да" type="radio" id="yes" name="question10" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question10" value="0">
                        </div>
                        <div class="radio11">
                            <h3>Регулярно возникающие сокращения мышц нижних конечностей</h3>
                            <input label="Да" type="radio" id="yes" name="question11" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question11" value="0">
                        </div>
                        <div class="radio12">
                            <h3>Дневные приступы непреодолимой сонливости</h3>
                            <input label="Да" type="radio" id="yes" name="question12" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question12" value="0">
                        </div>
                        <div class="radio13">
                            <h3>Приступы внезапного засыпания</h3>
                            <input label="Да" type="radio" id="yes" name="question13" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question13" value="0">
                        </div>
                        <div class="radio14">
                            <h3>Приступы внезапной утраты мышечного тонуса при ясном сознании</h3>
                            <input label="Да" type="radio" id="yes" name="question14" value="1" checked>
                            <input label="Нет" type="radio" id="no" name="question14" value="0">
                        </div>



                        <button type="submit">Далее</button>
                    </div>



            </div>
            </form>
        </div>
    </div>
</body>


</html>