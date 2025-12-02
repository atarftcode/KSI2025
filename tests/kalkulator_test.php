<?php
require_once "../src/kalkulator.php";

function assertEqual($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[PASS]  $testName <br>";
    } else {
        echo "[FAIL]  $testName — Expected: $expected, Got: $actual <br>";
    }
}

$k = new Kalkulator();

// Unit Test
assertEqual(7, $k->tambah(3, 4), "Test Tambah");
assertEqual(1, $k->kurang(5, 4), "Test Kurang");
?>
