<?php 

    require_once 'config/db_con.php';

    class Model {
        public $db_conn;

        public function __construct() {
            $this->db_conn = Connection::Connect();
        }

        public function show ($table) {
            $query = $this->db_conn->query("SELECT * FROM $table");
            return $query;
        }

        public function insert ($table,$col,$values) {
            $query = $this->db_conn->query("INSERT INTO $table($col) VALUES (".$values.")");
            return $query;
        }
    }

?>