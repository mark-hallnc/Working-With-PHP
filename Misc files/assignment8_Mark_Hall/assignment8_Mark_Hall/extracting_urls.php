<?php
if (getenv('REQUEST_METHOD') == 'POST') {
	$url = $_POST['Assignmen 2_HTML practice_Mark Hall.html'];
}
else {
	$url = $_GET['Assignmen 2_HTML practice_Mark Hall.html'];
}
?>

<form action="<$php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p>URL: <input type="text" name="url" value="<$php echo $url ?>" /><br />
<input type="submit">

<?php
if ($url) {
	$remote = fopen($url, 'r'); {
		$html = fread($remote, 1048576); //read uo to 1 MB of html
	}
fclose($remote);

$urls = '(http|telnet|gopher|file|wais|ftp)';
$ltrs = '\w';
$gunk = '/#~:.?+=&%@!\-';
$punc = '.:?\-';
$any = "{$ltrs}{$gunk}{$punc}";

preg_match_all("{
	\b # start at word boundry
	{$urls}: #need resource and a colon
	[{$any}] +? # followed by one or more of any valid
	# characters-but be coservative
	# and only take what you need
	(?= # the match ends at)
	[{$punc}]* # punctuation
	[^{$any}] # followed by a non-URL characters-but
	| # or
	\$ # the end of the string
	)
}x", $html, $matches);

printf("I found %d URLs<P>\n"), sizeof(matches[0]));

foreach ($matches[0] as $u){
	$link = $_SERVER['PHP_SELF'] . '?url=' . urlencode($u);
	echo "<a href=\"{$link}\">{$u}</a><br />\n";
 }
}