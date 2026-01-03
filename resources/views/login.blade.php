<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layout.header')
    <h1>Login form</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Login</button>
        <a href="/pr14">Dashboard</a>
</form>
    @include('layout.footer')
</body>
</html>