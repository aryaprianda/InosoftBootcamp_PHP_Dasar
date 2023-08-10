<?php

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jariJari) {
    global $pi;
    return number_format($pi * $jariJari * $jariJari, 2);
}

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($jariJari) {
    global $pi;
    return number_format(2 * $pi * $jariJari, 2);
}

// Fungsi untuk menghitung luas persegi
function luasPersegi($panjang, $lebar) {
    return number_format($panjang * $lebar, 2);
}

$pi = 3.14;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        // Kelipatan 3 dan 5
        $panjang = $i / 3;
        $lebar = $i / 5;
        echo luasPersegi($panjang, $lebar) . "<br>";
    } elseif ($i % 3 === 0) {
        // Kelipatan 3
        echo luasLingkaran($i / 3) . "<br>";
    } elseif ($i % 5 === 0) {
        // Kelipatan 5
        echo kelilingLingkaran($i / 5) . "<br>";
    } else {
        // Bukan kelipatan 3 atau 5
        echo number_format($i, 2) . "<br>";
    }
}

?>