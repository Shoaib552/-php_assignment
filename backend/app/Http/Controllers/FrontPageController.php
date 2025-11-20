<?php

namespace App\Http\Controllers;

class FrontPageController extends Controller
{
    // Dynamic CMS pages (About, Contact, etc)
    public function show($slug)
    {
        if (!in_array($slug, ['about', 'contact'])) {
            abort(404);
        }

        return view('pages.' . $slug);
    }
}
