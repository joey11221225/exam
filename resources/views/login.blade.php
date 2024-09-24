<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @session('successful')
        <script>
            alert("{{ session('successful') }}");
        </script>
    @endsession   
    <form action="{{ route('u_login') }}" method="post">
        @csrf
        <h2>Login</h2>
        <label>Username:</label>
        <input type="text" name="name">
        @error('name')
            {{ $message }}
        @enderror
        <br><br>
        <label>Email:</label>
        <input type="email" name="email">
        @error('email')
            {{ $message }}
        @enderror
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        @error('password')
            {{ $message }}
        @enderror
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="button" value="Register" name="register" onclick="window.location.href='/register'">
    </form>
</body>
</html>
