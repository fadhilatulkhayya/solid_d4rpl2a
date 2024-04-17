<?php
include_once "SosialMedia.php";

interface PostMediaManager extends SocialMedia
{
    public function publishPost(): void;
}