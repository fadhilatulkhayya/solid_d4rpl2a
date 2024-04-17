<?php

include_once "VideoGroupManager.php";

class WhatsApp implements VideoGroupManager
{
    public function chat(): void
    {
        echo "Mengobrol menggunakan WhatsApp...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Mengirim foto dan video menggunakan WhatsApp...\n";
    }

    public function callGroupVideo(): void
    {
        echo "Memanggil video grup menggunakan WhatsApp...\n";
    }
}