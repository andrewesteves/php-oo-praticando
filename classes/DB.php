<?php

require_once 'config.php';

class DB
{
	private static $instance = null;

	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			self::$instance = new PDO('mysql:host=localhost;dbname=' . DB_NAME, DB_USER, DB_PASS);				
			self::conectar();
			
		}
		return self::$instance;
	}

	private function conectar() 
	{
		try {
			self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 	
	}

	public static function prepare($sql)
	{
		return self::getInstance()->prepare($sql);
	}
}