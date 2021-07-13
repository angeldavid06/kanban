<?php 

    require_once 'Model.php';

    class Projects extends Model {
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
    }

?>