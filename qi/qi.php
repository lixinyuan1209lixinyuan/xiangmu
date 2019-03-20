<?php
class Db{
	private static $_instance = null;
	private static $_pdo = null;
	private function __construct(){
		if(self::$_pdo == null){
			self::$pdo = new PDO("mmysql:host=127.0.0.1;dbname=1608b",'root','root');
		}
		return self::$_pdo;

	}
	private function __clone(){

	}
	public static function getInstance(){
		if(!(self::$_instance instanceof Db)){
			self::$_instance = new Db();
		}
		return self::$_instance;
	} 
	public function pdo(){
		$sql = "select * from tp_cat";
		echo $sql;
	}
}

$obj = Db::getInstance();
$obj1 = Db::pdo();
?>