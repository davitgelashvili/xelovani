<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home',['users' => $users]);
    }
    public function edit($id){
        $except = User::where('id', '!=', $id)->get();
        $comments = Comment::where('user_id', '=', $id)->get();
        $rate = Comment::where('user_id', '=', $id)->avg('rate');
        $rounded = round($rate, 1);
        // dd($rate);
        $user = User::find($id);
        return view('details',[
            'user' => $user,
            'except' => $except,
            'comments' => $comments,
            'rate' => $rounded
                            ]);
    }
    public function comments(Request $request, $id){
        // dd($request,$id);
        $comment = Comment::create([
            'comment' => $request['comment'],
            'rate' => $request['rate'],
            'user_id' => $id
        ]);
        $comment->save();
        return redirect()->back();
    }
}
