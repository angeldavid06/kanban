<?php 

    require_once 'models/priority.php';
    require_once 'routes/web.php';

    class PriorityController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Priority();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('priority');
            $this->web->view('priority',$data);
        }

        public function insert () {
            $this->model->setPriority($_POST['priority']);
            $result = $this->model->PriorityInsert();
            if ($result) {
                header("Location: http://localhost/kanban/?controller=PriorityController&action=show");
            }
        }
    }

?>