<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {


        if ($request->hasFile('certificate')) {

            $file = $request->file('certificate');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;

            $path = Storage::disk('public')->put('uploads/cart', $file);

            return $path;
        }
        return '';
    }
}
