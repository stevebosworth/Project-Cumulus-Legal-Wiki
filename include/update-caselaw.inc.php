<?php 

//Carrying out server side validation

//validating the hidden field has been set
if (!empty($_POST['hidden']))
{
	$errmsg = ""; //Starting the error string

	//validating the caseID
	if(!empty($_POST['caseID']))
	{
		$caseID = $_POST['caseID']; //Sets the caseID
		$pattern = "/^\d{1,7}$/";

		if(preg_match($pattern, $caseID))
		{
		
		}
		else
		{
			$errmsg = "case ID may only contain numbers";
		}
	}
	else 
	{
		$errmsg = "Please enter the case ID";
	}

	//validating the caseRef
	if(!empty($_POST['caseRef']))
	{
		$caseRef = $_POST['caseRef']; //Sets the caseRef
		$pattern = "/^([a-zA-Z0-9_\s\.\-]*)$/";

		if(preg_match($pattern, $caseRef))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & case reference may not contain special characters";
		}
	}
	else 
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & case reference";
		}
		else
		{
			$errmsg = "Please enter the case reference";
		}
	}

	//validating the courtID
	if(!empty($_POST['courtID']))
	{
		$courtID = $_POST['courtID']; //Sets the courtID
		$pattern =  "^[A-Za-z]+$^";

		if(preg_match($pattern, $courtID))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & court id may only contain letters";
		}
	}
	else
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & court ID";
		}
		else
		{
			$errmsg = "Please enter the court ID";
		}
	}

	//validating the caseDate
	if(!empty($_POST['caseDate']))
	{
		$caseDate = $_POST['caseDate']; //Sets the caseDate
		$pattern = "/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/";

		if(preg_match($pattern, $caseDate))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & case date should be between 1900 and today, and in the format YYYY-MM-DD";
		}
	}
	else
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & case date";
		}
		else
		{
			$errmsg = "Please enter the case date";
		}
	}

	//validating the url
	if(!empty($_POST['url']))
	{
		$url = $_POST['url']; //Sets the url
		$pattern = "^([A-Za-z]{3,9}://(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+])\$^";

		if(preg_match($pattern, $url))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & invalid url - must begin with http://";
		}
	}
	else
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & url";
		}
		else
		{
			$errmsg = "Please enter the url";
		}
	}

	$caseDesc = $_POST['caseDesc'];
	$hidden = $_POST['hidden'];

	//Ensuring no errors have occurred
	if ($errmsg == "")
	{

	//requiring the cumulus database PDO connection
	require_once '../classes/Dbconn.class.php';

	//creating an instance of the class to use for queries
	$db = Dbconn::getDB();

	//updates the database record based on caselaw id from previous page
	$udquery = "UPDATE caselaw SET case_id=$caseID, case_ref='$caseRef', court_id='$courtID', case_date='$caseDate', url='$url', case_desc='$caseDesc' WHERE case_id=$hidden";
	$db->query($udquery);

	//redirect user to original page
	header("Location: ../caselawUD.php");
  	exit;

	}

	//echo error string if errors were encountered above
	else
	{
		echo $errmsg;
		return false;
	}
}


?>