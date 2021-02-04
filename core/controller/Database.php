<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b216e10aec63f4";$this->pass="a21db832";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_41ae6efb91b0112";

		//mysql://b216e10aec63f4:a21db832@eu-cdbr-west-03.cleardb.net/heroku_41ae6efb91b0112?reconnect=true
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b216e10aec63f4";$this->pass="a21db832";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_41ae6efb91b0112";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
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
