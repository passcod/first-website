<?php

file_put_contents('log', file_get_contents('log')."\n".date(DATE_COOKIE)." >> ".$_SERVER['REMOTE_ADDR']);

?>
<html>
	<head>
		<title>The Book I Dreamt Of</title>
		<style type="text/css">
			/* Diavlo, A font by Jos Buivenga (exljbris) -> www.exljbris.com */
			@font-face {
				font-family: "Diavlo Bold";
				src: local("Diavlo Bold"),
				url(Diavlo_BOLD_II_37.otf);
				font-weight: bold;
			}
			@font-face {
				font-family: "Diavlo";
				src: local("Diavlo Book"),
				url(Diavlo_BOOK_II_37.otf);
			}
			
			* {
				font-family: "Diavlo", sans-serif;
				color: black;
			}
			em {
				font-style: italic;
			}
			b, strong, h1 {
				font-family: "Diavlo Bold", sans-serif;
				font-weight: bold;
			}
			
			a, a:visited {
				text-decoration: underline;
			}
			a:hover {
				text-decoration: none;
			}
			
			#license-text {
				display: none;
			}
			#license:hover #license-img {
				display: none;
			}
			#license:hover #license-text {
				display: inline;
				font-size: x-small;
			}
			
			#chapters {
				display: block;
				padding-left: 5px;
			}
		</style>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#ref').append('<a>Refresh pages</a> <span style="font-size: x-small"></span>');
				$('#ref a').click(refreshPages);
			});
			
			function refreshPages()
			{
				$('#ref span').text('Loading...');
				$.get('refresh.php', function(data) {
					var dat = data.match(/^[0-9]+/)[0];
					$('#ref span').text('Loaded '+dat+' bytes');
				});
			}
		</script>
	</head>
	<body>
		<h1>The Book I Dreamt Of</h1>
		<h2>Here you will find the latest pages of my book.</h2>
		<div id="pages">
			<ul>
				<li><a href="page.php?_=book">Information and Documents</a></li>
				<li><a href="page.php?_=diary">Writing Diary</a></li>
			</ul>
			<br />
			<dl>
				<dt></dt>
				<dd><ul><li><a href="page.php?_=prologue">Prologue</a></li></ul></dd>
				<br />
				<dt></dt>
				<dd id="chapters"><ol>
					<li><a href="page.php?_=chapter1">28.47.3</a></li>
				</ol></dd>
			</dl>
		</div>
		<p>The next chapters will be added upon their beginning.</p>
		<br />
		<p id="ref"></p>
		<br />
		<p><small>This page lists only rendered selected files. For all the latest files, go to <a href="http://beta.intuxication.org/passcod/book/browse/tip">the actual Hg repositery</a>.</small></p>
		<p><small>The font used here <span style="font-size: xx-small">(if you're using a compatible browser, e.g Firefox or Safari)</span> is Diavlo, from <a href="http://www.exljbris.com">exljbris</a></small></p>
		<br />
		<p><small>All these pages <span style="font-size: xx-small">(everything within /thebook/, except the Diavlo font and PHP Markdown)</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://passcod.webege.com/thebook" property="cc:attributionName" rel="cc:attributionURL">passcod</a> are licensed under a <span id="license"><span id="license-img"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a></span> <span id="license-text"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported License</a>.</span></span></small></p>

	</body>
</html>
