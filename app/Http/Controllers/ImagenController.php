<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');

        $nombreImagen = Str::uuid().".".$imagen->extension();

        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(500, 500);

        $imagenRuta = public_path('uploads').'/'.$nombreImagen;

        $imagenServidor->save($imagenRuta);
        
        return response()->json(['imagen'=>$nombreImagen]);
    }
}
