<?php

class Cash implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran menggunakan metode Cash\n";
    }
}