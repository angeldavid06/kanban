<?php 

    require_once 'models/leaders.php';
    require_once 'routes/web.php';

    class LeadersController {
        public $model;
        public $web;

        public function __construct () {
            $this->model = new Leaders();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('leaders');
            $this->web->view('leaders',$data);
        }

        public function insert () {
            if (isset($_POST['nombre'])) {
                $this->model->setName($_POST['nombre']);
                $this->model->setIdTeam($_POST['team']);
                $result = $this->model->LeadersInsert();
                if ($result) {
                    header("Location: http://localhost/kanban/?controller=LeadersController&action=show");
                } else {
                    echo 'error al insertar';
                }
            }
        }
    }

?>