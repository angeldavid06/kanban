<?php 

    require_once 'models/substeps.php';
    require_once 'routes/web.php';

    class SubStepsController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new SubSteps();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('substeps');
            $this->web->view('substeps',$data);
        }

        public function insert () {
            $this->model->setName($_POST['nombre']);
            $this->model->setIdStep($_POST['step']);
            $result = $this->model->SubStepInsert();
            if ($result) {
                header("Location: http://localhost/kanban/?controller=SubStepsController&action=show");
            }
        }
    }

?>