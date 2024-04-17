<?php
include_once "SosialMedia.php";
interface VideoGroupManager extends SocialMedia
{
    public function callGroupVideo(): void;
}