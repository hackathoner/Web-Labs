<?php
	require 'vendor/autoload.php';
	use Parse\ParseClient;
	use Parse\ParseUser;
	use Parse\ParseQuery;
	ParseClient::initialize('p2j14hndp186bSPx3Wvab5qbIKypRrtshmXcqgnc', 'h7hGHUj1IulfKW55Dc7HFgtthblt4K5CvzkhIvxV', 's9Y1uBwoCM8UvRliOJbJks00qDoSGS1N6tPQI4TC');
	use Parse\ParseObject;
	use Parse\ParseFile;

	

				
			$uploaddir = '/afs/csl.tjhsst.edu/students/2016/2016ayachama/web-docs/TJGuides/files';
			$uploadfile = $uploaddir . basename($_FILES['file']['name']);
			echo '<br><br>' . $uploadfile;
			echo '<pre>';
			echo $_FILES['file']['name'];
			if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
			    echo "File is valid, and was successfully uploaded.\n";
			} else {
			    echo "Possible file upload attack!\n";
			}

			echo 'Here is some more debugging info:';
			print_r($_FILES);

			print "</pre>";







	// $query = ParseUser::query();
	// $query->equalTo("hashed", strval($_COOKIE["user"])); 
	// $results = $query->find();
	// $currentUser = $results[0]->get("email");

	// $subject = $_POST["subject"];
	// $class = $_POST["class"];
	// $chapter = $_POST["chapter"];
	// $file = $_POST["file"];
	// $file = preg_replace('/\s+/', '%20', $file);



	// // echo $subject;
	// // echo $class;
	// // echo $chapter;
	// echo $file;

	// $contents = "Hello World.";
	// $pfile = ParseFile::createFromData($contents, $file);
	// $pfile -> save();

	// $studyguide = new ParseObject("studyGuide");
	// $studyguide->set("subject", $subject);
	// $studyguide->set("class", $subject);
	// $studyguide->set("chapter", $subject);
	// $studyguide->set("file", $pfile);
	// $studyguide->set("user", $currentUser);

	// $studyguide->save();

	// header("Location: index.php");

?>