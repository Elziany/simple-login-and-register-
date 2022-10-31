<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="post" action="{{route('login')}}">
        @csrf

       email : <input type="text" name="email"><br>
       password : <input type="password" name="password"><br>

        <button type="submit">login</button>
    </form>
</body>
</html>
