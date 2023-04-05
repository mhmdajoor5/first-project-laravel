<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function showPost()
  {
    $post = "This is a post";
    return view('post', compact('post'));
  }

  public function createPost()
  {
    $createPost = "create post";
    return view('post_create', compact('createPost'));
  }
    public function editPost()
    {
        $editPost = "edit post";
        return view('post_edit', compact('editPost'));
    }
    public function deletePost()
    {
        $deletePost = "delete post";
        return view('post_delete', compact('deletePost'));
    }
}
