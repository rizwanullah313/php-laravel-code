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
        $newPost = new Post;
        $newPost->title = "New title";
        $newPost->body = "New Post Body";
        $newPost->category = "Laravel";
        $newPost->save();
    

    // $newPost = Post::create(['title' => 'Second Post Title', 'body' => 'Second Post Body', 'category' => 'reactjs']);
    // $newPost->save();


    // Fetch data from database and display it
    // $post = Post::where('id', 3)->first();
    // print_r($post->title);

    
    // Second way of Fetch data only single data
    // $post = Post::find(2);
    // print_r($post->body);


    // Display all records frm database
    // $posts = Post::find([1,2,3]);
    // print_r($posts);

    // $posts = Post::find([1,2,3]);
    // // print_r($posts);
    // foreach ($posts as $post):
    //         echo $post->title, "<br>";
    // endforeach;


    // Fr update
//     $post = Post::find(2);
//     $post->title = "Update Title";
//     $post->body = "Updated Body";
// if($post->save())
// {
//     echo "updated successfully";
// }
// else{
//     " not Updated ";
// }


// This is for deletion code
// $post = Post::find(3);
// if($post->delete())
// {
//     echo "deleted data successfully";
// }
 }
}
