<?php

$uri = urldecode(trim($_SERVER['REQUEST_URI'], '/'));

//echo $uri ?
//  file_get_contents(__DIR__ . '/redirect.html') :
//  file_get_contents(__DIR__ . '/homepage.html');

header('HTTP/1.1 301 Moved Permanently');
header('Location: https://lbry.tv/' . $uri);
echo '<meta http-equiv="refresh" content="0;url=https://lbry.tv' . htmlspecialchars($uri, ENT_QUOTES, 'UTF-8') . '">';
