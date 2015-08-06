<?php

/*
 * Class return connection to database
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */

class ConnectionFactory {

    static public function getConnection() {
        $db = null;
        if (isset($_SERVER['SERVER_SOFTWARE']) &&
                strpos($_SERVER['SERVER_SOFTWARE'], 'Google App Engine') !== false) {
            // Connect from App Engine.            
            $db = mysql_connect(':/cloudsql/vod-ventana-educativa:vod', 'root', '');
        } else {
            // Connect from a development environment.      
            $properties = new ConnectionProperty();
            $db = mysql_connect(
                    $properties->getHost(), 
                    $properties->getUser(), 
                    $properties->getPassword());
        }
        mysql_set_charset('utf8', $db);
        mysql_select_db($properties->getDatabase());
        if (!$db) {
            die(json_encode(
                            array('outcome' => false, 'message' => 'Unable to connect')
            ));
        }
        return $db;
    }

    /**
     * Zwrocenie polaczenia
     *
     * @return polaczenie
     */
//	static public function getConnection(){
//		$conn = mysql_connect(ConnectionProperty::getHost(), 
//                        ConnectionProperty::getUser(), 
//                        ConnectionProperty::getPassword());
//		mysql_select_db(ConnectionProperty::getDatabase());
//		if(!$conn){
//			throw new Exception('could not connect to database');
//		}
//		return $conn;
//	}

    /**
     * Zamkniecie polaczenia
     *
     * @param connection polaczenie do bazy
     */
    static public function close($connection) {
        mysql_close($connection);
    }

}

?>