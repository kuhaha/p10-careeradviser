<?php
session_start();
 unset($_SESSION);
 session_destroy();
 $url = 'login.php';           //転送先のURL(TOPページ)
   header('Location:' . $url);   // 画面転送
?>