<?php 

    require_once 'models/steps.php';
    require_once 'routes/web.php';

    class StepsController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Steps();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('steps');
            $this->web->view('steps',$data);
        }

        public function insert () {
            $this->model->setName($_POST['step']);
            $this->model->setIdBoard($_POST['board']);
            $result = $this->model->StepInsert();
            if ($result) {
                header("Location: http://localhost/kanban/?controller=StepsController&action=show");
            }
        }
    }

?>