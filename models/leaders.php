<?php 

    require_once 'models/Model.php';

    class Leaders extends Model {
        public $id;
        public $name;
        public $id_team;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setIdTeam ($id_team) {
            $this->id_team = $id_team;
        }

        public function getId ($id) {
            return $this->id;
        }

        public function getName () {
            return $this->name;
        }

        public function getIdTeam () {
            return $this->id_team;
        }

        public function LeadersInsert () {
            $values = "'".$this->name."',"."'".$this->id_team."'";
            $result = Model::insert('leaders','name,id_team',$values);
            return $result;
        }
    }

?>