<?php

include_once "KendaraanBBM.php";

class Mobil implements KendaraanBBM
{
    public function menggunakanBBM(): void
    {
        echo "Mobil ini mobil yang masih menggunakan BBM\n";
    }
}