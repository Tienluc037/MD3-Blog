<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a class="btn btn-success" href="{{route('blogs.index')}}">Back</a>
<table border="4px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>

    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->content}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
