<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = Blogs::whereRaw('DATEDIFF(NOW(), created_at) > 30')->delete();
        // dd($users);


        $user_id = Auth::user()->id;
        $blogs = Blogs::where(User::USER_ID, $user_id)->paginate(5);

        return view('home')->with('blogs',$blogs);
    }
}
