@extends('post.layout.app')

<h1 class="text-center text-3xl uppercase font-black my-4">Edit Post</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>

@endif

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('posts.update', $post ->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" class="form-control" name="title" id="title" placeholder="Insert your title" value = "{{$post->title }}">
        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Insert your content">{{$post->content}}</textarea>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('posts.index') }}" button type="navigation"class="btn btn-primary">Back</button> </a>

    </form>
</div>