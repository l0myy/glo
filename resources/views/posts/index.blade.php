@extends('layouts.layout',['title'=>'Main page'])

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Results for search: "<?=$_GET['search']?>"</h2>
            <p class="lead">Number of posts found: {{count($posts)}}</p>
        @else
            <h2>No results for search "<?=$_GET['search']?>" found</h2>
            <a href="{{route('post.index')}}" class="btn btn-outline-primary">Show all posts</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
            <div class="col-6">
                <div class="card-header"><h2>{{$post->short_title}}</h2></div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url({{$post->img ?? asset('img/hello.jpg')}})"></div>
                    <div class="card-author">Author: {{$post->name}}</div>
                    <a href="{{ route('post.show',['id'=>$post->id]) }}" class="btn btn-outline-primary" >Show post</a>
                </div>

            </div>
        @endforeach
    </div>
    @if(!isset($_GET['search']))
        {{$posts->links()}}
    @endif

@endsection
