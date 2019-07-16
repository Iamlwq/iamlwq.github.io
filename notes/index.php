<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<form action="index.php" method="post">
	<!--Text: <input type="text" name="inputText" width="250"></br>-->
	Text: <textarea name="inputText" ></textarea></br>
	<input type="submit">
</form>
<?php
	$filename = 'notes.txt';
	$word = $_POST["inputText"];
	if(!empty($word))
	{
		$fh = fopen($filename, "a");
		fwrite($fh, "<p>".$word."</p>");
		fclose($fh);
	}
	$fh = fopen($filename, "r");
	$allword=fread($fh,filesize($filename));
	echo $allword;
	fclose($fh);
?>

<!--<video width="480" height="320" controls>
	<source id="mp4" src="http://img.liwenqiao.com/video/HouseNavigation.mp4" type="video/mp4">
</video>-->
</body>
</html>
