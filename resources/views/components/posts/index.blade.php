@foreach($posts as $post)
    <div class="container md:mx-auto md:container md:mx-auto py-5">
        <h1>
            <a href="{{route('posts.show', $post->slug)}}">
                {{$post->title}}
            </a>
        </h1>
        <p>{{$post->description}}</p>
        <hr>
    </div>
    <small>{{$post->created_at->diffForHumans()}}</small>
@endforeach
