<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/css/result.css">

<body>
    <div class="wrapper">
    <?php require_once "blocks/header.php" ?>
        <div class="info">
            
            <?php
            try {
                $a = $_COOKIE["Simptoms"];
                $conn = new PDO('mysql:host=localhost;dbname=sleepfix1;port=3306', 'root', 'root');
                $sql = "SELECT * FROM diseases WHERE Simptoms='" . $a . "' ";
                $result = $conn->query($sql);
                echo "<table><tr><th>Возможно вас беспокоит</th><th>Рекомендации</th>";
                while ($row = $result->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row["Title"] . "</td>";
                    echo "<td>" . $row["Recomendations"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } catch (PDOException $e) {
                echo "Database error: " . $e->getMessage();
            }
            ?>
        </div>
    </div>
</body>

</html>