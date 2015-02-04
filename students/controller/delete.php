<?php
    class delete{
        public function index(){
            $model = new model();
            $id_route = explode("/", $_SERVER['REQUEST_URI']);
            $model->deleteStudents($id_route[3]);
            header("Location: /");
        }
    }
?>