@extends('layouts.layout',['title'=>'Create a new post'])

@section('content')
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" xmlns="http://www.w3.org/1999/html">
        @csrf
        <h3>Create post</h3>

        @include('posts.parts.form')

        <input type="submit" value="Create post" class="btn-outline-success">

    </form>
@endsection

