<a href="{{ route('posts.create') }}" class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Create a new post</a>
{{ session('message') }}
<h1>Posts</h1>

@foreach($posts as $post)
<p>
    {{ $post -> title }}
    [

    <a href="{{ route('posts.show', $post->id) }}">View detail</a> |
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
    {{ auth()->user()->username }}
    ]


    @endforeach

