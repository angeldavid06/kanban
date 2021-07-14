<?php 

    require_once 'models/board.php';
    require_once 'routes/web.php';

    class BoardController {
        public $model;
        public $web;
        
        public function __construct () {
            $this->model = new Board();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('board');
            $this->web->view('board',$data);
        }

        public function insert () {
            $this->model->setIdTeam($_POST['team']);
            $result = $this->model->BoardInsert();
            if ($result) {
                header("Location: http://localhost/kanban/?controller=BoardController&action=show");
            }
        }
    }

?>