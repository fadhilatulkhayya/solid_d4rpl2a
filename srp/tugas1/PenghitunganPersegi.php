<?php
include_once "Persegi.php";
class PerhitunganPersegi {
    public function hitungLuas(Persegi $persegi): int {
        return $persegi->getSisi();
    }
}
