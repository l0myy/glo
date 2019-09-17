@extends('layouts.layout')

@section('content')
    <form action="{{ route('post.update',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data" xmlns="http://www.w3.org/1999/html">
        @csrf
        @method('PATCH')
        <h3>Edit post</h3>

        @include('posts.parts.form')

        <input type="submit" value="Create post" class="btn-outline-success">

    </form>
@endsection
