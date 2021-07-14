<?php 

    require_once 'models/Model.php';

    class SubSteps extends Model {
        public $id;
        public $name;
        public $id_step;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setIdStep ($id_step) {
            $this->id_step = $id_step;
        }

        public function getId () {
            return $this->id;
        }

        public function getName () {
            return $this->name;
        }

        public function getIdBoard () {
            return $this->id_step;
        }

        public function SubStepInsert () {
            $values = "'".$this->name."',"."'".$this->id_step."'";
            $result = Model::insert('substeps','name,id_step',$values);
            return $result;
        }
    }

?>