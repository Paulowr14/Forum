<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller{
    public $post;
    public function __construct(Post $post){
    $this->post = $post;
    }

    public function index(){
        return view('post.index',["posts"=>$this->post->all()]);
    }
    
    public function show(Post $post){
         return view('post.show',["post"=>$post]);
    }
    
    
    public function create() {
        return view('post.create');
    }

    public function store(Post $post) {       
        $namepost = $post->namepost;
        $post = new Post();
        $post->title = $namepost;
        var_dump($post->save());

    }

        
   

    public function edit(Post $post) {
        return view('post.edit',["post"=>$post]);
    }

    public function update() {
        session()->flash('Message', "The post was successfully updated");   

        return redirect()->action([PostController::class, 'index']);
    }

    public function destroy(Post $post) {
        $post->delete();
        session()->flash('Message', "The post was successfully deleted");   

        return redirect()->action([PostController::class, 'index']);

    }
}