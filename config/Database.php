<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="id14574288_caffin_ema";$this->pass="=WkRbPpb4(a>Igr5";$this->host="localhost";$this->ddbb="id14574288_caffin";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
