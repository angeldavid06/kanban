<?php 

    require_once 'models/task.php';
    require_once 'routes/web.php';

    class TaskController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Task();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('tasks');
            $this->web->view('tasks',$data);
        }

        public function insert () {
            $this->model->setName();
            $this->model->setDescription();
            $this->model->setDate();
            $this->model->setIdPriority();
            $this->model->setIdStep();
            $this->model->setIdSubStep();
            $result = $this->model->TaskInsert();
            if ($result) {
                header("Location: http://localhost/kanban/?controller=TaskController&action=show");
            }
        }
    }

?>