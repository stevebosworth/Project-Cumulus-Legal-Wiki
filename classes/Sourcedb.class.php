<?php


class SourceDB{
	public function getSourcesBySec($sec_num){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sources WHERE sec_num = '$sec_num'";

		$result = $db->query($query);

		$sources = array();

		foreach($result as $row){
			$source = new Source(
								  $row['sec_num'],
								  $row['url']);
			$sources[] = $source;
		}

		return $sources;
	}

	public function addSource($sec_num, $url){
		$db = Dbconn::getDB();

		$query = $db->prepare("INSERT INTO sources (sec_num, url) VALUES (:sec_num, :url)");

		$query->bindParam('sec_num', $sec_num);
		$query->bindParam('url', $url);

		try{
			$insert = $query->execute();
			$message = "Success.";
		}catch(PDOException $ex){
			$message = "Failed.";
		}
		return $message;
	}
}