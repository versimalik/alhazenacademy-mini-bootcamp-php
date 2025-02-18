<?php

define("PI", 3.14);
echo PI . PHP_EOL;

// jika diubah atau di define ulang, makan akan error
define("PI", 22/7);
echo PI . PHP_EOL;

define("CMM", ", ");

echo "Selamat datang" . CMM . "di kelas PHP";