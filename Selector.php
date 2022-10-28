<?php
$link = new mysqli('db', 'root', 'test', 'world');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continente</title>
</head>

<body>
    <form action="Selector2.php" method="post">
        <select name="opcion">
            <?php

            $sql = 'SELECT DISTINCT Continent FROM country';
            $result = $link->query($sql);
            $row = $result->fetch_array();
            while ($row != null) {
            ?>
                <option><?= $row['Continent'] ?></option>
            <?php $row = $result->fetch_array();
            } ?>
            <input type="submit" value="Enviar" name="send" />
            <?php
            if (isset($_POST["send"])) {
                $Continente = $_POST['opcion'];
            }
            ?>

</form>
</body>
</html>
<?php $link->close() ?>