<?php 
    require_once 'models/Model.php';

    class Members extends Model {
        public $id;
        public $name;
        public $id_team;
        public $id_task;

        public function setId ($id) {
            $this->id = $id;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setTeam ($id_team) {
            $this->id_team = $id_team;
        }

        public function setTask ($id_task) {
            $this->$id_task = $id_task;
        }

        public function getId ($id) {
            return $this->id;
        }

        public function getName ($name) {
            return $this->name;
        }

        public function getTeam ($id_team) {
            return $this->id_team;
        }

        public function getTask ($id_task) {
            return $this->$id_task;
        }

        public function MemberInsert () {
            $values = "'".$this->name."',"."'".$this->id_team."',"."'".$this->id_task."'";
            $result = Model::insert('members','name,id_team,id_task',$values);
            return $result;
        }
    }

?>