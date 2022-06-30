<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit new</h2>
    <form action="/update/{{ $new->id }}" method="post">
        @csrf
        <label for="tit">
            Title:
            <input type="text" name="tit" value="{{ $new->title }}">
        </label><br><br>

        <label for="img">
            Image:
            <input type="text" name="img" value="{{ $new->image }}">
        </label><br><br>

        <label for="des">
            Description:
            <input type="text" name="des"value="{{ $new->description }}">
        </label><br><br>
        <label for="date">
            Date:
            <input type="text" name="date"value="{{ $new->date }}">
        </label><br><br>
        <label for="date">
            Author:
            <input type="text" name="au"value="{{ $new->author }}">
        </label><br><br>
        <label for="au">
           
        </label><br><br>
        <button type="submit">Edit new</button>
    </form>
    
</body>
</html>