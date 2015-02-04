<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Students</title>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <h1>Список студентов</h1>
    <a href="/create">Создать</a>
    <table class="list-students" cellspacing="0">
        <thead>
        <tr>
            <td>№</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Пол</td>
            <td>Возраст</td>
            <td>Группа</td>
            <td>Отделение</td>
            <td colspan="2">Управление</td>
        </tr>
        </thead>
        <tbody>
        %content%
        </tbody>
    </table>
</div>
</body>
</html>