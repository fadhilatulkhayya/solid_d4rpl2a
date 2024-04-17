<?php
include_once "PosMediaManager.php";

class Instagram implements PostMediaManager
{
    public function chat(): void
    {
        echo "Ngobrol menggunakan Instagram...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Mengirim foto dan video menggunakan Instagram...\n";
    }

    public function publishPost(): void
    {
        echo "Memublikasikan postingan menggunakan Instagram...\n";
    }
}