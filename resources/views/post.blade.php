<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset( env("ASSET_PATH" , "") . "css/custom.css") }}">

</head>
<body>
    <div class="container">
        <h1>{{$post->matter('title')}}</h1>
        {!!  $post->body() !!}
        <a href="{{route('home')}}">Back</a>
    </div>

</body>
</html>
