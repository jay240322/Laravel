<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layout.header')
    <h1>Register form</h1>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Register</button>
                <a href="/pr14">Dashboard</a>   
    </form>
    @include('layout.footer')
</body>
</html>