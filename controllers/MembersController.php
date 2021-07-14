<?php

    require_once 'models/members.php';
    require_once 'routes/web.php';

    class MembersController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Members();
            $this->web = new Web();
        }

        public function show () {
            $data = $this->model->show('members');
            $this->web->view('members',$data);
        }
    }

?>