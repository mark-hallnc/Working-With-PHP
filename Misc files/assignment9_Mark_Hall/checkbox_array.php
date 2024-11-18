

<html>
<head><title>Personality</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
Select your personality attributes:<br />
<input type="checkbox" name="attributes[]" value="depressed" />Depressed<br />
<input type="checkbox" name="attributes[]" value="manic" />Manic<br />
<input type="checkbox" name="attributes[]" value="aloof" />Aloof<br />
<input type="checkbox" name="attributes[]" value="happy" />Happy<br />
<input type="checkbox" name="attributes[]" value="mean" />Mean<br />
<input type="checkbox" name="attributes[]" value="dorky" />Dorky<br />
<br />
<input type="submit" name="s" value="Record my personality!" />
</form>
<?php if array(array_key_exists('s', $_GET)) {
	$desription = join (' ', $_GET['attributes']);
	echo "You have a {$description} personality.";
} ?>

</body>
</html>


