<?php 

    require_once 'models/Model.php';

    class Steps extends Model {
        public $id;
        public $name;
        public $id_board;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setIdBoard ($id_board) {
            $this->id_board = $id_board;
        }

        public function getId () {
            return $this->id;
        }

        public function getName () {
            return $this->name;
        }

        public function getIdBoard () {
            return $this->id_board;
        }

        public function StepInsert () {
            $values = "'".$this->name."',"."'".$this->id_board."'";
            $result = Model::insert('steps','name,id_board',$values);
            return $result;
        }
    }

?>