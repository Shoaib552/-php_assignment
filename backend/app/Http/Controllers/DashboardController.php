<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use App\Models\Media;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function stats()
    {
        $postsCount = Post::count();
        $pagesCount = Page::count();
        $mediaCount = Media::count();

        return response()->json([
            'posts' => $postsCount,
            'pages' => $pagesCount,
            'media' => $mediaCount,
        ]);
    }
}
