<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index()
    {
        //query builder
        // $posts = DB:: select("SELECT * FROM posts WHERE id = :id;",[
        //     'id' => 1
        // ]);
        // dd($posts);
        $post = DB::table("posts")
                        ->where('id','=', 5)
                        ->delete();

                        // ->where('id','=', 5)
                        // ->update([
                        //     'title' => 'Update Title',
                        //     'body' => 'Update Body'
                        // ]);

                        // ->insert([
                        //     'title' => 'New Title',
                        //     'body' => 'New Body'
                        // ]);

                        // ->average('id');
                        // ->sum('id');
                        // ->min('id');
                        // ->max('id');
                        // ->count();
                        //->find(3); // find by id
                        // ->whereNotNull('body')
                        // ->oldest()
                        // ->latest()
                        // ->orderBy('id','desc')
                        // ->whereBetween('id',[1,2])
                        // ->where('created_at', '>', now()->subDay())
                        // ->orWhere('id','>',0)
                        // ->select('body')
                        // ->first();
                        // ->get();
        dd($post);
        // return view('posts.index');
    }
}
