<?php

class create
{
    private function checkEmpty($string)
    {
        if ($string == "") {
            return false;
        } else
            return true;

    }

    private function  checkFields() //function for check data on empty return false if there are empty fields
    {
        if ($this->checkEmpty($_POST['name']) != false && $this->checkEmpty($_POST['surname']) != false && $this->checkEmpty($_POST['gender']) != false && $this->checkEmpty($_POST['age']) != false && $this->checkEmpty($_POST['group']) != false && $this->checkEmpty($_POST['department']) != false) {
            return true;
        } else
            return false;
    }

    public function index()
    {
        if (isset($_POST['submit'])) {  //if press button create student else render form

            $name = htmlspecialchars(trim($_POST['name'])); //shield from the html
            $surname = htmlspecialchars(trim($_POST['surname']));
            $gender = htmlspecialchars(trim($_POST['gender']));
            $age = htmlspecialchars(trim($_POST['age']));
            $group = htmlspecialchars(trim($_POST['group']));
            $department = htmlspecialchars(trim($_POST['department']));

            if ($this->checkFields() == true) {
                $model = new model();
                $model->create_students($name, $surname, $gender, $age, $group, $department);
                header("Location: /");
            } else {
                echo "you have empty fields";
            }
        } else {
            $template = file_get_contents("template/create.php");
            echo $template;
        }
    }
}

?>