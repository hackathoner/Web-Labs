<html>
	<head><title>Lab 9</title></head>
	<body style="background-color:#ecf0f1;">
	<form action="index.php" method="GET">
		<input type="text" name="text" style="padding:5px;">
		<input  style="padding:5px"type="submit">

	</form>
	<?php
		$text = $_GET["text"];
		$gentext = sha1($text);
	// echo $gentext;

		global $gentext;
		echo $gentext;
		echo "<h1>File Generated!</h1>";
		$db = new SQLite3('work.db');
		$db->exec('CREATE TABLE IF NOT EXISTS mytable (id INTEGER PRIMARY KEY, hashedString TEXT);');
		$db->exec('INSERT INTO mytable (hashedString) VALUES ("'. $gentext .'");');
		$file = 'file.tex';
		$current = file_get_contents($file);
		// echo $current;
		
		// // echo $current . "  1";
		// $pos1 = strrpos($current, ":");
		// $pos2 = strrpos($current, "\end");
		// $part1 = substr($current, "0", $pos1) . $gentext;
		// $part2 = substr($current, $pos2);
		// $current = $part1 + $part2;

		// Append a new person to the file
		$current = str_replace("MY TEXT", $gentext, $current);
		echo $current;
		// echo $current;
		$mfile = 'generated.tex';

		// Write the contents back to the file
		file_put_contents($mfile ,$current);
		sleep(1);
		exec("pdflatex generated.tex");
		header( "Location: download.php" );


	?>	
	</body>
</html>