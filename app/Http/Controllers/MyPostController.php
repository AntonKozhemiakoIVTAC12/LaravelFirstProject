<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    public function index(){


        $posts = post::all();
        return view('posts',compact('posts'));


//        $posts = post::where('is_published', 1)->get();
//        echo '<table>';
//        echo '<tr><th>Title</th><th>Content</th><th>Image</th><th>Likes</th></tr>';
//
//        foreach ($posts as $post) {
//            echo '<tr>';
//            echo '<td>' . $post->title . '</td>';
//            echo '<td>' . $post->content . '</td>';
//            echo '<td>' . $post->image . '</td>';
//            echo '<td>' . $post->likes . '</td>';
//            echo '</tr>';
//
//        }
//
//        echo '</table>';
//
//        echo 'end';
    }
    public function create()
    {
        $postsArr = [
            [
                'title'=> 'post1',
                'content'=> 'content1',
                'image'=> 'sex1',
                'likes'=> 20,
                'is_published'=> 1,
            ],
            [
                'title'=> 'post2',
                'content'=> 'content2',
                'image'=> 'sex2',
                'likes'=> 45,
                'is_published'=> 0,
            ],
            [
                'title'=> 'post3',
                'content'=> 'content3',
                'image'=> 'sex3',
                'likes'=> 65,
                'is_published'=> 1,
            ],
            [
                'title'=> 'post4',
                'content'=> 'content4',
                'image'=> 'sex4',
                'likes'=> 85,
                'is_published'=> 0,
            ],
            [
                'title'=> 'post5',
                'content'=> 'content5',
                'image'=> 'sex5',
                'likes'=> 100,
                'is_published'=> 1,
            ]
        ];
        foreach ($postsArr as $item){
            post::create($item);
        }
        dd('created');
        //post::create();
        //dd('created');
    }
    public function update()
    {
        $posts = post::find(5);
        $posts->update([
            'title' => 'post6',
            'content'=> 'content6',
            'image'=> 'sex6',
            'likes'=> 200,
            'is_published'=> 1,
        ]);
        dd('updated');
    }
    public function delete()
    {//truncate() - удаление всех записей
        $posts = post::find(1); //withTrashed()
        $posts->delete();   //(restore())
        dd('deleted');
    }
    //firstOrCreate
    //updateOrCreate обновление и проверка на дубликат атрибутов
    public function firstOrCreate()
    {
        $posts = post::firstOrCreate([//находит элемент таблицы, если его нету, то можно добавить новую структуру
            'title' => 'post7'
        ],
        [
            'title' => 'post7',
            'content'=> '7',
            'image'=> '7',
            'likes'=> 165,
            'is_published'=> 0,
        ]);

        dump($posts -> content);
        dd('finished');
    }
    public function updateOrCreate()//находит по элементам таблицы данные которые следует обновить, если он их не находит то создает новые
    {//сначала выполняется update иначе выполняется create
        $posts = post::updateOrCreate(
            [ 'title' => 'post7',
                'content'=> '7',
                'image'=> '7',
                'likes'=> 165,
                'is_published'=> 0,
            ],
            ['title' => 'post8',
            'content'=> '8',
            'image'=> '8',
            'likes'=> 255,
            'is_published'=> 1,
            ]);
        dump($posts -> likes);
        dd('finished update');
    }
//        dump($post->title);
//        dump($post->content);
//        dump($post->image);
//        dump($post->is_published);

}
