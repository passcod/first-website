<?php

if ( !empty($_GET['_']) )
{
	$pages = unserialize( base64_decode( file_get_contents('pages') ) );
	echo $pages[$_GET['_']];
}
else
{
	echo "no page";
}

?>
