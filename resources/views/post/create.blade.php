@extends('post.layout.app')

<h1 class="text-center text-3xl uppercase font-black my-4">Register a new Post</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>

@endif

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <input type="text" class="form-control" name="title" id="title" placeholder="Insert your title" value = "{{ old('title') }}">
        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Insert your content">{{ old('content') }}</textarea>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="navigation"class="btn btn-primary w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none"">Back</button>

    </form>
</div>