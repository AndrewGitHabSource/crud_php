<?php
class view{
    public function index($data){
        $template = file_get_contents("template/index.php");
        $str = "";
        foreach($data as $value){   //formed string of <tr> for insert in template
            $str .= "<tr>
                            <td>$value[id]</td>
                            <td>$value[name]</td>
                            <td>$value[surname]</td>
                            <td>$value[gender]</td>
                            <td>$value[age]</td>
                            <td>$value[group_std]</td>
                            <td>$value[department]</td>
                            <td><a href='/edit/index/$value[id]'>edit</a></td>
                            <td><a href='/delete/index/$value[id]'>delete</a></td>
                     </tr>";
        }                                   //values is data received in model(are in the loop)
        $template = str_replace("%content%", $str, $template);  //insert in template
        echo $template;     //render template
    }
}
?>