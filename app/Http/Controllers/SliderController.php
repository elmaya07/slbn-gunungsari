<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function index(){
    return view('admin.slider.index')->with([
        'title'=>'Slider',
        'slider'=>Slider::paginate(5)
        ]
    );
}

public function create(){
    return view('admin.slider.create')->with([
        'title'=>'Tambah Slider',
        ]
    );
}

public function store(Request $request){

    $slider = new Slider();
    $slider->text1 = $request->text1;
    $slider->text2 = $request->text2;
    $slider->text3 = $request->text3;

    $file = $request->file('gambar');

    $destinationPath = public_path('gambar');

    // Move the file to the public/uploads directory
    $file->move($destinationPath, $file->getClientOriginalName());

    $slider->gambar = $file->getClientOriginalName();
    $slider->save();

    return back()->with('success', 'Slider berhasil di tambah');

}

public function edit($id){
    return view('admin.slider.edit')->with([
        'title'=>'Tambah Slider',
        'slider'=>Slider::find($id)
        ]
    );
}
public function update(Request $request,$id){

    $slider =  Slider::find($id);
    $slider->text1 = $request->text1;
    $slider->text2 = $request->text2;
    $slider->text3 = $request->text3;
    if ($request->hasFile('gambar')) {
    $file = $request->file('gambar');

    $destinationPath = public_path('gambar');

    // Move the file to the public/uploads directory
    $file->move($destinationPath, $file->getClientOriginalName());

    $slider->gambar = $file->getClientOriginalName();
    }
    $slider->update();

    return back()->with('success', 'Slider berhasil di update');

}

public function delete($id){
    $slider = Slider::destroy($id);

    return back()->with('success', 'Slider berhasil di hapus');
}
}