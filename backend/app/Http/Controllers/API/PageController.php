<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Http\Requests\PageRequest;
use Illuminate\Support\Str;

class PageController extends Controller
{
    // List all pages
    public function index()
    {
        return Page::latest()->get();
    }

    // Create a page
    public function store(PageRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $page = Page::create($data);
        return response()->json($page, 201);
    }

    // Show single page
    public function show($id)
    {
        return Page::findOrFail($id);
    }

    // Update page
    public function update(PageRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $page->update($data);
        return response()->json($page);
    }

    // Delete page
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return response()->json(['message'=>'Page deleted']);
    }
}
