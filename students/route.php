<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/model/model_students.php");

class route
{
    static function start()
    {
        $patch = $_SERVER['REQUEST_URI'];
        $elements_route = explode("/", $patch); //break up url on parts

        $controller = strtolower($elements_route[1]);   //we have file and class for controller
        $action = strtolower($elements_route[2]);       //we have function which executed on transition on the url
        if ($controller == "") {
            $controller = "show"; //the default controller is show
        }
        if ($action == "") {
            $action = "index";  //if missing function controller then executed index function (controller function default)
        }

        require_once($_SERVER['DOCUMENT_ROOT'] . "/controller/$controller" . ".php");
        $class_controller = new $controller;
        $class_controller->$action();
    }
}

?>