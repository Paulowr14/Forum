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
    
    public function show(){
        return view('post.show',["posts"=>$this->post->all()]);
    }
    
    public function create() {
        return view('post.create');
    }

    public function store() {
        return view();
    }

    public function Edit() {
        return view();
    }

    public function update() {
        return view();
    }

    public function destroy() {
        return view();
    }
}