<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function store(Request $request)
    {


        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;

            $path = Storage::disk('public')->put('uploads/avatars', $file);

            return $path;
        }
        return '';
    }
}
