<?php
session_start();
error_reporting(0);
(isset($_SESSION['id_user'])) ? $id_user = $_SESSION['id_user'] : $id_user = 0;

$uri = $_SERVER['REQUEST_URI'];
$pageurl = explode("/",$uri);

$homeurl = "https://".$_SERVER['HTTP_HOST'];
(isset($pageurl[1])) ? $pg = $pageurl[1] : $pg = '';
(isset($pageurl[2])) ? $ac = $pageurl[2] : $ac = '';
(isset($pageurl[3])) ? $id = $pageurl[3] : $id = 0;


require "config.database.php";

$no = $jam = $mnt = $dtk = 0;
$info = '';
$waktu = date('H:i:s');
$tanggal = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');

define("KEY", "76310EEFF2B5D3C887F238976A421B638CFEB0942AB8249CD0A29B125C91B3E5");
