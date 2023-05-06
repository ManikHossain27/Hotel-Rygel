<?php
class Database{
	private $hostdb = "localhost";
	private $userdb = "root";
	private $passdb = "";
	private $namedb = "db_rygel";
	public  $db;
	public function __construct()
	{
		if (!isset($this->db)) {
			try{
				$link = new PDO("mysqpl:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
				$link ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$link ->exec("SET CHARACTER SET utf8");
				$this ->db = $link;
			}catch(PDOException $e){
				die("Failed to connect wirh Database".$e->getMessage());
			}
		}
	}
}

?>