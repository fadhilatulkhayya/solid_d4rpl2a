<?php

include_once "BarangElektronik.php";

class Lampu implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Lampu Sudah Menyala... \n";
    }
    public function berhenti(): void
    {
        echo "Lampu Sudah Berhenti Menyala... \n";
    }
}