<?php

$db = include "database/start.php";

include "functions.php";
include "component/UploadFile.php";

dd($_SESSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
		$fileUp = new UploadFile($db);
		$path = "upload/img";
		$img = $fileUp->addFile('posts', $_FILES, $path);

		$db->create('posts', [
		    'title' => $_POST['title'],
		    'img'		=> $img,
		]);
		
}

header('Location: /index.php');