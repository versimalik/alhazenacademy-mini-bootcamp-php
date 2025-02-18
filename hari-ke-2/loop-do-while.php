<?php $number = 17; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop - Do While</title>
</head>
<body>

<?php do{?>

    <p><?php echo $number;?>. Saya sedang belajar PHP.</p>
<?php $number++; ?>
<?php } while($number <= 100);?>
    
</body>
</html>