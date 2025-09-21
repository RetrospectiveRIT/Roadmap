<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/mobile|android|touch|webos|hpwos/i', $userAgent)) {
    header('Location: Mobile.php');
    exit;
} else {
    header('Location: Desktop.php');
    exit;
}
?>