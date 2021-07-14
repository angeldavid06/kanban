<?php 

    require_once 'models/Model.php';

    class Priority extends Model {
        public $id;
        public $priority;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setPriority ($priority) {
            $this->priority = $priority;
        }

        public function getId () {
            return $this->id;
        }

        public function getPriority () {
            return $this->priority;
        }

        public function PriorityInsert () {
            $values = "'".$this->priority."'";
            $result = Model::insert('priority','priority',$values);
            return $result;
        }
    }   

?>