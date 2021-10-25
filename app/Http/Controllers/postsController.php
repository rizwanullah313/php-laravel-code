<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postsController extends Controller
{
    public function index(){
        return 'Welcome';
    }
    public function create(){
    //     $newPost = new Post;
    //     $newPost->title = "New title";
    //     $newPost->body = "New Post Body";
    //     $newPost->category = "Laravel";
    //     $newPost->save();
    
    $newPost = Post::create(['title' => 'Second Post Title', 'body' => 'Second Post Body', 'category' => 'reactjs']);
    $newPost->save();
    }
}
