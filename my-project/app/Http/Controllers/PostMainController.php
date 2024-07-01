<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostMainController extends Controller
{
    public function display() {
        return view('post.index');
    }
}
