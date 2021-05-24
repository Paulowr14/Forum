<h1 class="text-center text-3xl uppercase font-black my-4">Post's Detail: {{ $post->title }}</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <ul>
            <li><strong>Title: </strong>{{ $post->title }}</li>
            <li><strong>Content: </strong>{{ $post->content }}</li>
           
        </ul>

        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none">Delete Post: {{ $post->title }}</button>
            
        </form>
        <a href="{{ route('posts.index') }}" button type="navigation"class="btn btn-primary">Back</button>
    </div>