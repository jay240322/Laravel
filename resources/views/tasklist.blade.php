<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($tasks as $task)
    <li>{{$task}}</li>
    @endforeach

    {{count($stack)}}

    @foreach($stack as $s)
    <li>{{$s}}</li>
    @endforeach
</body>
</html>