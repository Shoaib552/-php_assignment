<?php

namespace App\Http\Controllers;

use App\Models\Page;

class FrontPageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('page', compact('page'));
    }
}
