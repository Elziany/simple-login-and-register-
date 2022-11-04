<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{route('changeLang','en')}}">English</a><br>
<a href="{{route('changeLang','fr')}}">french</a><br>
<a href="{{route('changeLang','ar')}}">االغة العربية</a><br>
{{ __('messages.welcome') }}</body>
</html>
