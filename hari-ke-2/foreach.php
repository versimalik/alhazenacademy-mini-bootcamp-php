<?php
$name_list = [
    "Andi",
    "Beni",
    "Candra",
    "Dodi",
    "Egi",
    "Fitria",
    "Gunawan",
    "Heru",
    "Indra",
    "Jamal",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop - Foreach</title>
</head>
<body>
    
<?php foreach($name_list as $name):?>
    <p>Siswa atas nama <strong><?= $name; ?></strong></p>
<?php endforeach;?>

</body>
</html>