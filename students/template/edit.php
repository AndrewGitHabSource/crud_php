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
    <form name="createStudent" method="post" action="/edit">
        <label>���</label>
        <input name="name" type="text" value="{{name}}">
        <label>�������</label>
        <input name="surname" type="text" value="{{surname}}">
        <label>���</label>
        <input name="gender" type="text" value="{{gender}}">
        <label>�������</label>
        <input name="age" type="text" value="{{age}}">
        <label>������</label>
        <input name="group" type="text" value="{{group_std}}">
        <label>���������</label>
        <input name="department" type="text" value="{{department}}">
        <input name="id" type="hidden" value="{{id}}">
        <input type="submit" name="submit">
    </form>
</div>
</body>
</html>