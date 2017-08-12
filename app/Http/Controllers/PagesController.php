<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
        if (View::exists('pages.index'))
            return view('pages.index')
                ->with('text', '<b>Laravel</b>')
                ->with('name', 'Nicole');
            # return view('pages.index', ['text' => '<b>Laravel</b>', 'name' => 'Nicole']);
        else
            return 'No view available';
    }
}
