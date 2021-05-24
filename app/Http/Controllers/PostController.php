<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsFormRequest;

use App\Models\Post;

class PostController extends Controller
{
    public $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return view('post.index', ["posts" => $this->post->all()]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->action([PostController::class, 'index']);
        }

        return view('post.show', ["post" => $post]);
    }


    public function create()
    {
        return view('post.create');
    }

    public function store(PostsFormRequest $request)
    {
        $post = auth()->user()->posts()->create($request->validated());
        /* $post = new Post();
        $post->title = $request->input('name');
        $post->content = $request->input('content');
        $post->user_id = auth()->user()->id;*/

        return redirect()->action([PostController::class, 'index'])
                         ->with('message', " The post was successfully created");
    }



    public function edit($id)
    {

        $post = Post::find($id);

        if (!$post) {
            return redirect()->back();
        }
        return view('post.edit', ["post" => $post]);
    }

    public function update(PostsFormRequest $request, $id)
    {
        
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

    
       $post->update($request->all());

       return redirect()->action([PostController::class, 'index'])
       ->with('message', " The post was successfully updated");
    }
    

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('Message', "The post was successfully deleted");

        return redirect()->action([PostController::class, 'index'])
            ->with('message', " The post was successfully deleted");
    }
}
