<?php

include_once "FiturScan.php";
include_once "FiturCetak.php";
include_once "FiturFax.php";

class PrinterFlagship implements FiturScan, FiturCetak, FiturFax
{
    public function cetakKertas(): void
    {
        echo "Mencatakan Kertas Printer yang Paling Mahal.... \n";
    }
    public function terimaFax(): void
    {
        echo "Menerima Fax Printer Yang Paling Mahal.... \n";
    }
    public function scanKertas(): void
    {
        echo "MengScan Kertas Printer Yang Paling Mahal.... \n";
    }
}