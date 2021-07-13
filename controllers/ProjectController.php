<?php 

    require_once 'models/projects.php';
    require_once 'routes/web.php';

    class ProjectController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Projects();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('projects');
            $this->web->view('projects',$data);
        }

        public function insert () {
            if (isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $values = "'$nombre'";
                $result = $this->model->insert('projects','name',$values);
                if ($result) {
                    header("Location: http://localhost/kanban/?controller=ProjectController&action=show");
                } else {
                    echo 'error al insertar';
                }
            }
        }
    }

?>