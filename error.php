<?php

$origpage = getenv("REQUEST_URI");
$error = htmlspecialchars($_GET["error"]);

switch ($error) {

case "401":
	$errortext = "Error 401 - Unauthorized";
break;
case "403":
	$errortext = "Error 403 - Forbidden";
break;
case "404":
	$errortext = "Error 404 - Not Found";
break;
default:
case "500":
	$errortext = "Error 500 - Internal Server Error";
break;
	}
?>
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en-us' lang='en-us'>
<head>
	<title><?print $errortext?></title>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<meta name='author' content='Kyle Berry' />
	<!-- syntax highlighting CSS -->
	<link rel='stylesheet' href='/css/syntax.css' type='text/css' />
	<!-- Homepage CSS -->
	<link rel='stylesheet' href='/css/screen.css' type='text/css' media='screen, projection' />

<script type='text/javascript'>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24694852-1']);
		_gag.push(['_setDomainName', 'kyleberry.org']);
		_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
		})();

</script>
</head>
<body>
<div class='site'>
	<div class='title'>
		<a href='/'>Kyle's Blog</a><a class='extra' href='/'>home</a>
	</div>
 
	<h1><?print $errortext?></h1>

	<div class='footer'>
		<div class='contact'>
			<p>
				Kyle Berry<br />
				Linux Systems Administrator at <a href='http://rackspace.com/'>Rackspace</a><br />
				kyle@kyleberry.org<br />
				<br />
				<a href='http://www.ipv6.org'><img src='/images/ipv6-ready.png' alt='IPv6 ready'></a><br />
				<a href='http://wiki.nginx.org'><img src='/images/nginx-inside.png' alt='nginx inside'></a><br />
			</p>
		</div>
		<div class='contact'>
			<p>
				<a href='http://facebook.com/4wd22r/'>Facebook</a><br />
				<a href='http://plus.google.com/4wd22r/'>Google +</a><br />
				<a href='http://git.kyleberry.org/'>Git Repo</a><br />
				<br />
				<a href='http://www.vim.org/'><img src='/images/vim_created.png' alt='created by vim'></a><br />
			</p>
		</div>
	</div>
</div>
</body>
</html>
