﻿<?php//Interface connecting Database parametersInterface IConnect{  CONST DSN = "mysql:host=localhost;dbname=paulpdo;port=3306";  CONST USN = "root";  CONST PW = "";  public static function doConnect();  }// DB Class that implements interface with DBase class Connector implements IConnect{   private static $dsn = IConnect::DSN;   private static $usn = IConnect::USN;   private static $pw = IConnect::PW;   private static $hookup;      //Database Connector Method   public static function doConnect()   { 		if (!isset($self::$hookup))		{			try			{				self::$hookup = new PDO(self::$dsn,self::$usn, self::$pw);			}			catch(PDOException $e)			{				self::$hookup = null;				die($e->getMessage());			}		}				return self::$hookup;   }}?>