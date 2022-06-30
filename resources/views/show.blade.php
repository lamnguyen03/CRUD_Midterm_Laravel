<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List News</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Image</td>
            <td>Description</td>
            <td>Date</td>
            <td>Author</td>

        </tr>
        @foreach($new as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->title }}</td>
                <td>{{ $n->image }}</td>
                <td>{{ $n->description }}</td>
                <td>{{ $n->date }}</td>
                <td>{{ $n->author }}</td>
                <td>
                    <a href="/update/{{$n->id }}">Update</a> <br> 
                    <a href="/delete/{{ $n->id }}">Delete</a>
                <td>
            </tr>
        @endforeach
    </table>
</body>
</html>