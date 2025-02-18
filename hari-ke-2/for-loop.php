<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop - For</title>
</head>
<body>
    
    <?php for($number=1; $number<=10; $number++):?>

        <p>Siswa nomor urut <strong><?= $number; ?></strong></p>

    <?php endfor;?>

</body>
</html>