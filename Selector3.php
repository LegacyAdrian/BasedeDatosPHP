<?php
$link = new mysqli('db', 'root', 'test', 'world');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudad</title>
</head>
<body>
<?php
    $Codigo = $_POST["opcion2"];
    ?>
     <form action="Selector4.php" method="post">
        <select name="opcion3">
            <?php

            $sql = "SELECT * FROM city WHERE CountryCode = '$Codigo'"; 
            $result = $link->query($sql);
            $row = $result->fetch_array();
            while ($row != null) {
            ?>
                <option ><?= $row['Name'] ?></option>
            <?php $row = $result->fetch_array();
            } ?>
            <input type="submit" value="Enviar" name="send2" />
            <?php
            if (isset($_POST["send2"])) {
                $Ciudad = $_POST['opcion3'];
            }
            ?>
</form>
</body>
</html>
<?php $link->close() ?>