<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $name = '侍 太郎';

        //変数$nameをindex.blade.phpファイルに渡す
        return view('index', compact('name'));
    }
}
