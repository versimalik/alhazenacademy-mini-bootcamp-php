<?php

$title = "PHP Kalkulator";

// Contoh function rumus pertambahan dengan nama add()
function add($n1=0, $n2=0){
    return $n1 + $n2;
}

// Buatlah function untuk rumus lain
// 1. pengurangan dengan nama substract()
// 2. perkalian dengan nama multiply()
// 3. perkalian dengan nama divide()

while(true){
    echo $title . PHP_EOL;
    echo str_repeat("=",strlen($title)) . PHP_EOL;
    echo "Pilih menu operasi yang ingin digunakan:" . PHP_EOL;
    echo "1. Tambah" . PHP_EOL;
    echo "2. Kurang" . PHP_EOL;
    echo "3. Kali" . PHP_EOL;
    echo "4. Bagi" . PHP_EOL;
    echo "x. Keluar aplikasi". PHP_EOL;
    echo "Masukkan kode menu (1/2/3/4/x): ";
    $menu = readline();

    switch($menu){
        case 1:
            $number1 = readline("Masukkan angka pertama: ");
            $number2 = readline("Masukkan angka kedua: ");
            $text_result = "$number1 + $number2 = " . add($number1,$number2);
            echo $text_result . PHP_EOL;
            echo str_repeat("=",strlen($text_result))."\n\n";
            sleep(5);
            break;
        case "x":
            echo "Terima kasih sudah menggunakan PHP Kalkulator";
            die();
        // tambahkan case lain untuk kode menu 2, 3, 4
        //
        // tambahkan default case
        // dengan statement menampilkan kalimat peringatan
        // "Kode menu tidak diketahui"
    }
}

?>