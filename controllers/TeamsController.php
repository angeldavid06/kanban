<?php 

    require_once 'models/teams.php';
    require_once 'routes/web.php';

    class TeamsController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Teams();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('teams');
            $this->web->view('teams',$data);
        }

        public function insert () {
            if (isset($_POST['nombre'])) {
                $this->model->setName($_POST['nombre']);
                $result = $this->model->TeamsInsert();
                if ($result) {
                    header("Location: http://localhost/kanban/?controller=TeamsController&action=show");
                }
            }
        }
    }

?>