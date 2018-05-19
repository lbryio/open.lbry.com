<?php
	$uri=trim($_SERVER['REQUEST_URI'],'/');
	$uri=urldecode($uri);

	if (!$uri)
	{
	  echo file_get_contents(__DIR__.'/homepage.html');
	  exit;
	}
	 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: lbry://' . $uri);
	echo '<meta http-equiv="refresh" content="0;url=lbry://' . htmlspecialchars($uri, ENT_QUOTES, 'UTF-8') . '">';

?>