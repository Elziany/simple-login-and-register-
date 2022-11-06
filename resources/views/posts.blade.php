<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('create_post')}}" method="POST">
    @csrf
    <input name="title" type="text" placeholder="post title"><br>
    <textarea name="body"></textarea><br>
    <button>submit</button>
</form>

<h1>user Posts</h1>
@foreach(auth()->user()->posts as $post )
<div>
<div>{{$post->title}}</div>
<div>{{$post->body}}</div>
</div>
@endforeach


</body>
</html>
