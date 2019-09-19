@extends('layouts.layout',['title'=>"Post №$post->post_id . $post->title"])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-header"><h2>{{$post->title}}</h2></div>
            <div class="card-body">
                <div class="card-img card-img__max"
                     style="background-image: url({{$post->img ?? asset('img/hello.jpg')}})"></div>
                <div class="card-descr">Description: {{$post->descr}}</div>
                <div class="card-author">Author: {{$post->name}}</div>
                <div class="card-date">Post created {{$post->created_at->diffForHumans()}}</div>

                <div class="card-btn">
                    <a class="btn btn-outline-primary" href="{{ route('post.index') }}">Back to home</a>
                    @auth
                        @if(Auth::user()->id == $post->author_id)
                            <a class="btn btn-outline-success" href="{{ route('post.edit',['id'=>$post->post_id]) }}">Edit
                                post</a>

                            <form action="{{ route('post.destroy',['id'=>$post->post_id]) }}" method="post" onsubmit="if(confirm('Are you sure?'))
                                        {return true} else {return false}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger" value="Delete post">
                            </form>
                        @endif
                    @endauth
                </div>
            </div>

        </div>
    </div>
@endsection
