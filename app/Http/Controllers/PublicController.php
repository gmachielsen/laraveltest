<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {

      $posts = Post::all();
      return view('welcome', compact('posts'));
    }

    public function contact()
    {
      return view('contact');
    }

    public function contactPost(Request $request)
    {
      if($request->hasFile('attachment')){
          $file =$request->file('attachment');

          echo "File name" . $file->getClientOriginalName();
          echo "<br>";

      } else {
        return "No";
      }
      var_dump($request->all());
    }

    // public function userInfo($userId, $name)
    // {
    //   return "User: " . $userId . ' - ' . $name;
    // }
    // public function displayPosts()
    // {
    //   $posts = Post::all();
    //
    //   foreach ($posts as $post)
    //   {
    //     print $post->title . '<br>';
    //   }
    // }
}
