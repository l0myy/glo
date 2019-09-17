@extends('layouts.layout')

@section('content')
    <div class="row">
            <div class="col-12">
                <div class="card-header"><h2>{{$post->title}}</h2></div>
                <div class="card-body">
                    <div class="card-img card-img__max" style="background-image: url({{$post->img ?? asset('img/hello.jpg')}})"></div>
                    <div class="card-author">Author: {{$post->name}}</div>
                    <div class="card-date">Post created {{$post->created_at->diffForHumans()}}</div>

                    <div class="card-btn">
                    <a class="btn btn-outline-primary" href="{{ route('post.index') }}">Back to home</a>
                    <a class="btn btn-outline-success" href="{{ route('post.edit',['id'=>$post->id]) }}">Edit post</a>
                    <a class="btn btn-outline-danger" href="{{ route('post.destroy',['id'=>$post->id]) }}">Delete post</a>
                    </div>
                </div>

            </div>
    </div>
@endsection
