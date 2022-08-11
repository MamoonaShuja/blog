<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset( env("ASSET_PATH" , "") . "css/custom.css") }}">
</head>
<body>
    <div class="container mt-5">
        @foreach($posts as $post)
            <h1><a href="{{route('single', $post->matter('slug'))}}"> {{$post->matter('title')}}</a></h1>
            <p>{{$post->matter('excrept')}}</p>
            <small>{{$post->matter('date')}}</small>
        @endforeach
    </div>

</div>
</body>
</html>
