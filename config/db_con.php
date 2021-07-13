<?php 

    class Connection {
        public static function Connect () {
            $conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'kanban'
            );

            return $conn;
        }
    }

?>