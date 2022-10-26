<?php
$link = new mysqli('db', 'root', 'test', 'world');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of the world</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th {
            background-color: black;
            color: white;
        }

        td,
        th {
            border: 1px solid black;
            padding: 2px 8px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Country</th>
                <th>District</th>
                <th>Population</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            
            $sql = 'SELECT * FROM city  LIMIT 4';
            $result = $link->query($sql);
            $row = $result->fetch_array();
            while ($row != null) {
            ?>
                <tr>
                <td> <?=$row['ID']?> </td>
                <td> <?=$row['Name']?></td>
                <td> <?=$row['CountryCode']?></td>
                <td> <?=$row['District']?></td>
                <td> <?=$row['Population']?></td>
                
                </tr>
                <?php $row = $result->fetch_array();?>
                <?php }?>
                </tbody>
      
    </table>

</body>

</html>
<?php $link->close() ?>