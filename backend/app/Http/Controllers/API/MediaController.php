<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Upload media file
     */
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,svg,pdf|max:5120',
        ]);

        $path = $request->file('file')->store('media', 'public');

        return response()->json([
            'message' => 'File uploaded successfully',
            'file_path' => $path,
            'url' => asset("storage/$path")
        ]);
    }

    /**
     * List all media
     */
    public function index()
    {
        $files = Storage::disk('public')->files('media');

        $data = array_map(function ($file) {
            return [
                'path' => $file,
                'url' => asset("storage/$file")
            ];
        }, $files);

        return response()->json($data);
    }

    /**
     * Delete a media file
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'file_path' => 'required|string'
        ]);

        if (Storage::disk('public')->exists($request->file_path)) {
            Storage::disk('public')->delete($request->file_path);
            return response()->json(['message' => 'File deleted successfully']);
        }

        return response()->json(['message' => 'File not found'], 404);
    }
}
