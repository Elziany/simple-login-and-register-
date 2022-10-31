<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form method="post" action="{{route('register')}}">
        @csrf
     name:   <input type="text" name="name"><br>
       email :  <input type="text" name="email"><br>
      password :  <input type="password" name="password"><br>
      confirm password:  <input type="password" name="repassword"><br>
        <button type="submit">submit</button>
    </form>

</body>
</html>
