<?php

class edit
{
    public function index()
    {
        $model = new model();
        if (isset($_POST['submit'])) { //if we press mouse on button then update student
            $name = htmlspecialchars(trim($_POST['name'])); //treatment data in array post
            $surname = htmlspecialchars(trim($_POST['surname']));
            $gender = htmlspecialchars(trim($_POST['gender']));
            $age = htmlspecialchars(trim($_POST['age']));
            $group = htmlspecialchars(trim($_POST['group']));
            $department = htmlspecialchars(trim($_POST['department']));
            $id = $_POST['id'];
            $model->updateStudents($name, $surname, $gender, $age, $group, $department, $id);
            header("Location: /");
        } else {                    //if button don't press then formed form
            $id_route = explode("/", $_SERVER['REQUEST_URI']);
            $stud = $model->getStudentById($id_route[3]);
            $template = file_get_contents("template/edit.php");
            foreach($stud as $key => $value){ //display the data in students in form
                $find = "{{".$key."}}";
                $template = str_replace($find, $value, $template);
            }
            echo $template; //render form
        }
    }
}

?>