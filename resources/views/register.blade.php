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
        {{__('messages.name')}}:   <input type="text" name="name"><br>
        {{__('messages.email')}} : <input type="text" name="email"><br>
        {{__('messages.password')}} : <input type="password" name="password"><br>
        {{__('messages.confirm')}}:  <input type="password" name="repassword"><br>

        <button type="submit">{{__('messages.register')}}</button>
    </form>

</body>
</html>
