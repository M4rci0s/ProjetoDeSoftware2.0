<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        return view('uploadimg');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/photos', $filename);

            $imagePath = 'storage/photos/' . $filename;

            return view('uploadimg')->with('imagePath', $imagePath)->with('success', 'Foto enviada com sucesso!');
        }

        return back()->with('error', 'Falha ao enviar foto.');
    }
}
