<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
<h1>�������� ��������</h1>
    <form name="createStudent" method="post" action="/create">
        <label>���</label>
        <input name="name" type="text">
        <label>�������</label>
        <input name="surname" type="text">
        <label>���</label>
        <input name="gender" type="text">
        <label>�������</label>
        <input name="age" type="text">
        <label>������</label>
        <input name="group" type="text">
        <label>���������</label>
        <input name="department" type="text">
        <input type="submit" name="submit">
    </form>
</div>
</body>
</html>