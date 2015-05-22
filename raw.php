<?php
if (strstr($_SERVER["PATH_INFO"], ".jpg")) {
    header("Content-Type: image/jpeg");
} else
if (strstr($_SERVER["PATH_INFO"], ".png")) {
    header("Content-Type: image/png");
} else
if (strstr($_SERVER["PATH_INFO"], ".gif")) {
    header("Content-Type: image/gif");
} else
if (strstr($_SERVER["PATH_INFO"], ".ico")) {
    header("Content-Type: image/png");
} else
if (strstr($_SERVER["PATH_INFO"], ".js")) {
    header("Content-Type: application/javascript");
} else
if (strstr($_SERVER["PATH_INFO"], ".css")) {
    header("Content-Type: text/css");
} else {
    header("Content-Type: application/octet-stream");
}

header("Cache-Control: max-age=3600,public");
echo file_get_contents("phar://" . $_SERVER["SCRIPT_FILENAME"] . $_SERVER["PATH_INFO"]);
?>