<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class MyAboutController extends Controller
{
    public function index(){


        $posts = post::all();
        return view('about');


//        $posts = post::where('is_published', 1)->get();
//        echo '<table>';
//        echo '<tr><th>Title</th><th>Content</th><th>Image</th><th>Likes</th></tr>';

//        foreach ($posts as $post) {
//            echo '<tr>';
//            echo '<td>' . $post->title . '</td>';
//            echo '<td>' . $post->content . '</td>';
//            echo '<td>' . $post->image . '</td>';
//            echo '<td>' . $post->likes . '</td>';
//            echo '</tr>';
//
//        }

//        echo '</table>';
//
//        echo 'end';
    }

}
