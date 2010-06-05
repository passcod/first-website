<?php
include_once("markdown.php");

function getIt($file) {
	$template = file_get_contents('template');
	//$raw = file_get_contents('http://beta.intuxication.org/passcod/book/raw-file/tip/'.$file.'.md');
	$raw = file_get_contents('/home/felix/Documents/thebook/'.$file.'.md'); //local override
	$raw = Markdown($raw);
	$raw = str_replace( 'page_content_goes_here', $raw, $template );
	return $raw;
}

$files = array('diary', 'book', 'prologue', 'chapter1');
$res = array();
foreach( $files as $name )
{
	$res[$name] = getIt($name);
}

$processed = base64_encode( serialize($res) );
echo file_put_contents('pages', $processed);
?>
