<?php

class Kredit implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran menggunakan metode Kredit\n";
    }
}