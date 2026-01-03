<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{$task -> title}}</h2>

    @if($task -> completed)
    <p style="color:blue">Task is completed</p>

    @else
    <p style="color:red">Task is not completed</p>

    @endif
</body>
</html>