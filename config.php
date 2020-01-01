<?php
/**
 * Config::DB_HOST
 */
class Config {
	static $DB_HOST = 'localhost';
	static $DB_USER = '';
	static $DB_PASSWORD = '';
	static $DB_NAME = '';
	static $CHARSET = 'utf8';
	static $DB_PREFIX = '';
	
	public function __construct($db_user,$db_pass,$db_name) {
		self::$DB_USER = $db_user;
		self::$DB_PASSWORD = $db_pass;
		self::$DB_NAME = $db_name;
	}
	
}

$cf = new Config("admin_us_cr","kokoko","admin_crawler");