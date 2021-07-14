<?php 

    require_once 'models/Model.php';

    class Teams extends Model {
        public $id;
        public $name;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function getId () {
            return $this->id;
        }

        public function getName () {
            return $this->name;
        }

        public function TeamsInsert () {
            $values = "'".$this->name."'";
            $result = Model::insert('teams','name',$values);
            return $result;
        }
    }

?>