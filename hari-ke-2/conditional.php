<?php $hujan = true; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>

    <?php if($hujan == true): ?>

        <h1 style="color:red;">Hari ini hujan!</h1>

    <?php else: ?>

        <h1 style="color:green;">Hari ini tidak Hujan!</h1>
    
    <?php endif;?>
    
</body>
</html>