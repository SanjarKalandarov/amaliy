<div>
    <h1>Hurmatli {{$post->user->name}}!</h1>
    <h5>Siz {{$post->created_at}} da yangi post yaratdingiz</h5>
    <p>
        Post id:{{$post['id']}}<br>

    </p>
    <div>{{$post->title}}</div>
    <div>{{$post->short_content}}</div>
    <div>{{$post->content}}</div>
    <strong>Rahmat!</strong>
</div>