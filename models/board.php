<?php 

    require_once 'models/Model.php';

    class Board extends Model {
        public $id;
        public $id_team;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setIdTeam ($id_team) {
            $this->id_team = $id_team;
        }

        public function getId () {
            return $this->id;
        }

        public function getIdTeam () {
            return $this->id_team;
        }

        public function BoardInsert () {
            $values = "'".$this->id_team."'";
            $result = Model::insert('board','id_team',$values);
            return $result;
        }
    }

?>