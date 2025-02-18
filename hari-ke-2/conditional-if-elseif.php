<?php

$score = 86;
$grade = "";

if($score >= 80 && $score <= 100){
    $grade = "A";
} else if($score >= 70 && $score <= 79){
    $grade = "B";
} else if($score >= 60 && $score <= 69){
    $grade = "C";
} else{
    $grade = "D";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional If Else If</title>
</head>
<body>

    <h1>Nilai kamu adalah <?php echo $score; ?></h1>
    <h1>Predikat kamu adalah <?php echo $grade; ?></h1>
    
</body>
</html>