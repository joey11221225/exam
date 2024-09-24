<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('u_register') }}" method="post">
        @csrf
        <h2>Register</h2>
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
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="button" name="login" value="Login" onclick="window.location.href='/login'">
    </form>
    @error('message')
        <script>
            alert("{{ $message }}");
        </script>
    @enderror
</body>
</html>