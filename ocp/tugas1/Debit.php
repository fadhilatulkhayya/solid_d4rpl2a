<?php

class Debit implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran menggunakan metode Debit\n";
    }
}