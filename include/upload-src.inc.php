<?php
    require_once '../classes/Dbconn.class.php';
    require_once '../classes/source.class.php';
    require_once '../classes/sourcedb.class.php';

//define ('SITE_ROOT', realpath(dirname(__FILE__)));

//var_dump($_FILES);

//echo $_SERVER['SERVER_NAME'];

$sec_num = $_POST['sec_num'];

//check for errors in upload
if ($_FILES['txt_path']['errors'] > 0)
{
	echo "Error: " . $_FILES['txt_path']['errors'];
}else{
	//check to see if file already exists.
	if(file_exists("../sources" . DIRECTORY_SEPARATOR . $_FILES['txt_path']['name']))
	{
		//if the file already exists. Add new record for source in DB.
		echo "File already exists.  Would you like to link it to this section anyway?";
	}else{
		$tmp_name = $_FILES['txt_path']['tmp_name'];
		$new_file = "../sources" . DIRECTORY_SEPARATOR . $_FILES['txt_path']['name'];
		//var_dump($new_file);
		move_uploaded_file($tmp_name, $new_file);

		//var_dump($_FILES['txt_path']['name']);
		//echo "success";
	}

	$file_url = "sources" . DIRECTORY_SEPARATOR . $_FILES['txt_path']['name'];
	$source = new SourceDB();
	$add_src = $source->addSource($sec_num, $file_url);

	echo $add_src;


}

