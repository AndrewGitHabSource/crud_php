<?php
require_once($_SERVER['DOCUMENT_ROOT']."/view/show_template.php");

class show
{
    public function index()
    {
        $model = new model();
        $view = new view();
        $students = $model->get_students();
        $view->index($students);            //data transmission in view
    }
}

?>