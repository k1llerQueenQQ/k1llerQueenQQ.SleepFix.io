<header class="container">
    <h3 class="logo">SleepFix<SleepFix</h3>
    <nav>
        <ul>
            
            <li class="active"><a href="index.php">Главная</a></li>
            <li><a href="analysis.php">Диагностика</a></li>
            <li><a href="reviews.php">Отзывы</a></li>
            <li><a href="feedback.php">Обратная связь</a></li>
            <?php
            if (isset($_COOKIE['login']))
                echo '<li class="btn"><a href="user.php">Личный кабинет</a></li>';
            else {
                echo '<li class="btn"><a href="login.php">Личный кабинет</a></li>';

            }
            ?>

        </ul>
    </nav>
</header>