<?php
  class Connect {
		
		// le proprietà che seguono servono all'oggetto Connect per poter aprire una connessione col DB
		var $server;
		var $username;
		var $password;
		var $db;
		
		function Open() {
			// apro la connessione col DB
			$conn = mysql_connect($this->server, $this->username, $this->password);
			mysql_select_db($this->db, $conn);
		}
	}
?>
