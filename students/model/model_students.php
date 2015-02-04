<?php
// this file was created for management data in database
class model
{
    private $mysqli; //object for working database

    public function __construct()   //initial object
    {
        $this->mysqli = new mysqli("localhost", "root", "", "students"); //connect to database
        if ($this->mysqli->connect_errno == true) {                     //if have errors output message
            echo "you have error on database";
        }
    }

    public function get_students()  //function return all records of table students
    {
        $students = array();
        $result = $this->mysqli->query("select id, name, surname, gender, age, group_std, department from students");
        if ($result->num_rows > 0) {    // if students over null write in array
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        } else {
            echo "you haven't students";
        }
        return $students;
    }

    public function create_students($name, $surname, $gender, $age, $group, $department)    //function create students
    {
        if (!$this->mysqli->query("insert into students (name, surname, gender, age, group_std, department) VALUES ('$name', '$surname', '$gender', '$age', '$group', '$department')")) {
            echo "Не удалось создать студента: (" . $this->mysqli->errno . ") " . $this->error;
        }
    }

    public function getStudentById($id) // function accept parameter id and return record by id (if id equals parameter)
    {
        $result = $this->mysqli->query("select id, name, surname, gender, age, group_std, department from students where id = $id");
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateStudents($name, $surname, $gender, $age, $group, $department, $id)    //function for update record in table
    {
        if (!$this->mysqli->query("update students set name = '$name', surname = '$surname', gender = '$gender', age = '$age', group_std = '$group', department = '$department' where id = '$id'")) {
            echo "Не удалось изменить данные: (" . $this->mysqli->errno . ") " . $this->error;
        }
    }

    public function deleteStudents($id) //deleted by id
    {
        if (!$this->mysqli->query("delete from students where id = '$id'")) {
            echo "Не удалось удалить студента: (" . $this->mysqli->errno . ") " . $this->error;
        }
    }
}

?>