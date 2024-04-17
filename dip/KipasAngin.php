<?php

include_once "BarangElektronik.php";

class KipasAngin implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Kipas Sudah Angin Menyala... \n";
    }
    public function berhenti(): void
    {
        echo "Kipas Sudah Angin Berhenti Menyala... \n";
    }
}