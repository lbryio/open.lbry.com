<?php
$uri = urldecode(trim(ltrim($_SERVER['REQUEST_URI'],'/')));
if (!$uri) {
  echo '¯\_(ツ)_/¯';
  exit;
}
header('HTTP/1.1 301 Moved Permanently');
header('Location: lbry://' . $uri);
echo '<meta http-equiv="refresh" content="0;url=lbry://' . htmlspecialchars($uri, ENT_QUOTES, 'UTF-8') . '">';
