<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>languages of the site</h1>
<a href="{{route('changeLang','en')}}">English</a><br>
<a href="{{route('changeLang','fr')}}">french</a><br>
<a href="{{route('changeLang','ar')}}">االغة العربية</a><br>
{{ __('messages.welcome') }}</body>
<a href="{{route('loginpage')}}">Login page</a><br>
<a href="{{route('registerpage')}}">register page</a><br>

</html>
