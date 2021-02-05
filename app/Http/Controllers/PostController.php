<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'body' => 'required|max:255'
        ]);

        auth()->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();

    }
}
