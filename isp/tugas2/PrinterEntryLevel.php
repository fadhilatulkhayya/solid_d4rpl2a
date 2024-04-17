<?php

include_once "FiturCetak.php";

class PrinterEntryLevel implements FiturCetak
{
    public function cetakKertas(): void
    {
        echo "Mencetakan Kertas Printer yang Paling Murah.... \n";
    }
}