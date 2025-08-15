<?php
$url = isset($_GET['data']) ? htmlspecialchars($_GET['data'], ENT_QUOTES, 'UTF-8') : '';
echo $url;
?>