<?php

include_once "Instagram.php";
include_once "WahtsApp.php";

$whatsapp = new WhatsApp();
$whatsapp->chat();
echo "<br>";
$whatsapp->sendPhotosAndVideos();
echo "<br>";
$whatsapp->callGroupVideo();
echo "<br>";

$instagram = new Instagram();
$instagram->chat();
echo "<br>";
$instagram->sendPhotosAndVideos();
echo "<br>";
$instagram->publishPost();