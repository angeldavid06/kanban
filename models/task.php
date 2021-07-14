<?php 

    require_once 'models/Model.php';

    class Task extends Model {
        public $id;
        public $name;
        public $description;
        public $date;
        public $id_priority;
        public $id_step;
        public $id_substep;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setDescription ($description) {
            $this->description = $description;
        }

        public function setDate ($date) {
            $this->date = $date;
        }

        public function setIdPriority ($id_priority) {
            $this->id_priority = $id_priority;
        }

        public function setIdStep ($id_step) {
            $this->id_step = $id_step;
        }

        public function setIdSubStep ($id_substep) {
            $this->id_substep = $id_substep;
        }

        public function getId () {
            return $this->id;
        }

        public function getName () {
            return $this->name;
        }

        public function getDescription () {
            return $this->description;
        }

        public function getDate () {
            return $this->date;
        }

        public function getIdPriority () {
            return $this->id_priority;
        }

        public function getIdStep () {
            return $this->id_step;
        }

        public function getIdSubStep () {
            return $this->id_substep;
        }

        public function TaskInsert () {
            $values = "'".$this->name."',"."'".$this->description."',"."'".$this->date."',"."'".$this->id_priority."',"."'".$this->id_step."',"."'".$this->id_substep."'";
            $result = Model::insert('tasks','name,description,date,id_priority,id_step,id_substep',$values);
            return $values;
        }
    }

?>