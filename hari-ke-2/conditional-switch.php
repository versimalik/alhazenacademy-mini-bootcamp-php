<?php
$color = "pink";
$text = "";

switch($color){
    case "red":
        $text = "Berhenti!!!!";
        break;
    case "yellow":
        $text = "Hati - hati!!";
        break;
    case "green":
        $text = "Silahkan jalan!!";
        break;
    default:
        $text = "Kode warna $color diketahui";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Switch</title>
</head>
<body>
    
    <h1 style="color:<?php echo $color;?>">
        <?php echo $text;?>
    </h1>

</body>
</html>