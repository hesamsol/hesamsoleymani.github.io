<?php
	$directory = "comments/";
	$filecount = 0;
	$files = glob($directory . "*");
	if ($files){
	 $filecount = count($files);
	}
	$filecount=$filecount+1;
	$comment= fopen("comments/$filecount.txt", "a");
	fwrite($comment,$_POST['name']."\n");
	fwrite($comment,$_POST['email']."\n");
	fwrite($comment,$_POST['message']."\n");
	header('Location: index.html'); 
?>