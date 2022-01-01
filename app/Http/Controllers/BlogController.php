<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blogs::paginate(10);

        return view('blogs.index')->with('blogs', $blogs);
    }
}
