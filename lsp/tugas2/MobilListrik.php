<?php

include_once "KendaraanListrik.php";

class MobilListrik implements KendaraanListrik
{
    public function menggunakanBaterai(): void
    {
        echo "Mobil ini mobil yang masa depanya bakal menggunakan listrik...\n";
    }
}