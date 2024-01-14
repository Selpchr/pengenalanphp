<?php
function luasLingkaran($jariJari) {
    return round(M_PI * $jariJari**2, 2);
}

function kelilingLingkaran($jariJari) {
    return round(2 * M_PI * $jariJari, 2);
}

function luasPersegi($panjang, $lebar) {
    return round($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $hasil = luasPersegi($i / 3, $i / 5);
    } elseif ($i % 3 == 0) {
        $hasil = luasLingkaran($i / 3);
    } elseif ($i % 5 == 0) {
        $hasil = kelilingLingkaran($i / 5);
    } else {
        $hasil = round($i, 2);
    }

    echo $hasil . PHP_EOL;
}
?>
