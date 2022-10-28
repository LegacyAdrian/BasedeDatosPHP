<?php
$link = new mysqli('db', 'root', 'test', 'world');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pais</title>
</head>
<body>
    <?php
    $Continente = $_POST["opcion"];
    ?>
     <form action="Selector3.php" method="post">
        <select name="opcion2">
            <?php

            $sql = "SELECT DISTINCT Code, name FROM country WHERE Continent = '$Continente'"; 
            $result = $link->query($sql);
            $row = $result->fetch_array();
            while ($row != null) {
            ?>
                <option value="<?= $row['Code']?>"><?= $row['name'] ?></option>
            <?php $row = $result->fetch_array();
            } ?>
            <input type="submit" value="Enviar" name="send1" />
            <?php
            if (isset($_POST["send1"])) {
                $Codigo = $_POST['opcion2'];
            }
            ?>
</form>
</body>
</html>
<?php $link->close() ?>