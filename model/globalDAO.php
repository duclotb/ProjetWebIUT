<?php
	function getDAO() {
		static $dao = NULL;

		if ($dao == NULL){
			$database = 'sqlite:'.dirname(__FILE__).'/../data/database.db';

			try {
				$dao = new PDO($database);
				if (!$dao) {die("Database error");}
			} catch (PDOException $e) {
				die("PDO Error :".$e -> getMessage()."$database\n");
			}
		}

		return $dao;
	}
?>