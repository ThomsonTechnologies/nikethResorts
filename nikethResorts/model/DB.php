<?php
class DB {
        private static function connect() {
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=niketh;charset=utf8', 'root', 'october22');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }

        public static function query($query, $params = array()) {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);

				$sql_arr = explode(' ', $query);

                if ($sql_arr [0] == 'SELECT') {
                	$data = $statement->fetchAll();
                	return $data;
                }
        }

}
