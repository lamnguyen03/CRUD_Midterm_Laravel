<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create user</h2>
    <form action="create" method="post">
        @csrf
        <label for="tit">
            Title:
            <input type="text" name="tit">
        </label><br><br>
        <label for="img">
            Image:
            <input type="text" name="img">
        </label><br><br>
        <label for="des">
            Description:
            <input type="text" name="des">
        </label><br><br>
        <label for="date">
            Date:
            <input type="text" name="date">
        </label><br><br>
        <label for="au">
           Author:
            <input type="text" name="au">
        </label><br><br>
        <button type="submit">Create new</button>
    </form>
</body>
</html>