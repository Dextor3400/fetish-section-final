<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Concert;
use App\Media;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(3);

        return view('pages.home',compact('posts'));
    }

    public function news()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);

        return view('pages.news',compact('posts'));
    }

    public function singlepost(Post $post){

        return view('pages.single-post',compact('post'));
    }

    public function tour()
    {
        $concerts = Concert::all();

        return view('pages.tour',compact('concerts'));
    }

    public function media()
    {
        $data = Media::findOrFail(1);

        return view('pages.media',compact('data'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
