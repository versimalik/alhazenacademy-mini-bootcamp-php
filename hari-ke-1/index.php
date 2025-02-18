<?php

$text = "Selamat datang";
$_text = "Variable dengan tanda underscore";
$Text = "SELAMAT DATANG";

// ini akan menyebabkan error
// $1text = "Selamat Datang";

$text1 = "Nama saya";
$text2 = "Malik";

echo "Ini adalah teks tanpa variable" . PHP_EOL;
echo $text . PHP_EOL;
echo $Text . PHP_EOL;
echo $_text . PHP_EOL;
echo $text1 . " " . $text2 . PHP_EOL;

$name = "Malik";
echo $name . PHP_EOL;

$name = "Reza";
echo $name . PHP_EOL;

// $name = readline("Masukkan nama Anda: ");
// echo $name . PHP_EOL;