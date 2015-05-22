<?php
$_SERVER["PHP_SELF"] = "/wiki/doku.php";
$_SERVER["PHP_SELF"] = str_replace("index.phar/", "", $_SERVER["PHP_SELF"]);
$_SERVER["SCRIPT_NAME"] = $_SERVER["PHP_SELF"];
$_SERVER["SCRIPT_FILENAME"] = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["SCRIPT_NAME"];
$_SERVER["PATH_TRANSLATED"] = $_SERVER["DOCUMENT_ROOT"] . "/wiki" . substr($_SERVER["REQUEST_URI"], strlen("/wiki"));
$_SERVER["PATH_INFO"] = substr($_SERVER["REQUEST_URI"], strlen("/wiki"));
//var_dump($_SERVER);
include("doku.php");