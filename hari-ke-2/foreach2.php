<?php
$car = [
    "brand" => "Ford",
    "model" => "TYU-1009",
    "year" => "1990",
    "color" => "maroon"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - Assoc. Array</title>
</head>
<body>

    <table>
    <?php foreach($car as $key => $value):?>
        <tr>
            <td><?= ucfirst($key); ?></td>
            <td>:</td>
            <td>
                <p style="color:<?php if($key == 'color'){echo $value;}?>;">
                    <?= ucfirst($value); ?>
                </p>
            </td>
        </tr>
    <?php endforeach;?>
    </table>

</body>
</html>