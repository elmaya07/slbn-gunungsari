<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    //
    public function index(){
    return view('admin.galeri.index')->with([
        'title'=>'Galeri',
        'galeri'=>Galeri::paginate(5)
        ]
    );
}

public function create(){
    return view('admin.galeri.create')->with([
        'title'=>'Tambah Galeri',
        ]
    );
}

public function store(Request $request){

    $galeri = new Galeri();
    $galeri->deskripsi = $request->deskripsi;

    $file = $request->file('gambar');

    $destinationPath = public_path('gambar');

    // Move the file to the public/uploads directory
    $file->move($destinationPath, $file->getClientOriginalName());

    $galeri->gambar = $file->getClientOriginalName();
    $galeri->save();

    return back()->with('success', 'Galeri berhasil di tambah');

}

public function edit($id){
    return view('admin.galeri.edit')->with([
        'title'=>'Tambah Galeri',
        'galeri'=>Galeri::find($id)
        ]
    );
}
public function update(Request $request,$id){

    $galeri =  Galeri::find($id);
    $galeri->deskripsi = $request->deskripsi;
    if ($request->hasFile('gambar')) {
    $file = $request->file('gambar');

    $destinationPath = public_path('gambar');

    // Move the file to the public/uploads directory
    $file->move($destinationPath, $file->getClientOriginalName());

    $galeri->gambar = $file->getClientOriginalName();
    }
    $galeri->update();

    return back()->with('success', 'Galeri berhasil di update');

}

public function delete($id){
    $galeri = Galeri::destroy($id);

    return back()->with('success', 'Galeri berhasil di hapus');
}
}