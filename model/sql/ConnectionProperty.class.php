<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{
	private $host = '172.16.101.28';
	private $user = 'vema';
	private $password = 'vema';
	private $database = 'vema';
        
        public function __construct() {
            $config = parse_ini_file("config.ini", true);
            $this->host       = $config['database']['host'];
            $this->user       = $config['database']['user'];
            $this->password   = $config['database']['pass'];
            $this->database   = $config['database']['name'];
        }

	public function getHost(){
		return $this->host;
	}

	public function getUser(){
		return $this->user;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getDatabase(){
		return $this->database;
	}
}
?>