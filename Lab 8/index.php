<?php

	function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
	// echo 'Your IP Address is: ' . get_client_ip();


	function workData() {
		echo "<h1>Welcome!</h1>";
		$db = new SQLite3('work.db');
		$db->exec('CREATE TABLE IF NOT EXISTS wowzers (id INTEGER PRIMARY KEY, ip TEXT,visits INTEGER);');
		$userip = get_client_ip();
		$mys = $db->prepare('SELECT ip FROM wowzers WHERE ip = "' . $userip . '"');
		$results = $mys -> execute();
		if($results->fetchArray() == null){
			$db->exec('INSERT INTO wowzers (ip,visits) VALUES ("'. $userip .'","1");');
			echo "Your IP Addres is ". $userip;

		}else{
			$q = $db->prepare('SELECT visits FROM wowzers WHERE ip = "' . $userip . '"');
			$swaq = $q -> execute();
			$finish = $swaq->fetchArray();
			$theint = (int)$finish[0] + 1;
			// print_r($finish);

			$db->exec('UPDATE wowzers SET visits = ' . $theint . ' WHERE ip = "' . $userip . '";');
			// $stmt->bindValue(':id', 1, SQLITE3_INTEGER);
			echo "Your IP Addres is ". $userip;
			echo "<br><br>You have visited us ". $theint . " times!";

		}
		
	};
	workData();
	// if ($db = new SQLite3('data.db')) {
	 	// $db->exec('CREATE TABLE mytable (id INTEGER PRIMARY KEY, ip TEXT,visits INTEGER)');
		// var_dump($result->fetchArray());
	// } else {
	// //   die ($sqliteerror);
	// // }
	// 	function putData() {
	// 		$myval = get_client_ip();
	// 	$db->exec('INSERT INTO mytable (ip) VALUES ($myval)');
	// 	// $db->exec('INSERT INTO mytable (ip) VALUES (get_client_ip()');
	// 	$stmt = $db->prepare('SELECT ip FROM mytable ORDER BY id;');
	// 	$result = $stmt->execute();
	// 	while ($row = $result->fetchArray())
	// 	{
	// 	    echo $row['name'] . PHP_EOL;q
	// 	}

 //  		// $result = $db->query('SELECT ip FROM mytable');
 //  		echo $result;
	// 	}
	// 	putData();
	// echo "this is your IP Address: " . get_client_ip();
?>