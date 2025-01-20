<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    //
    public function index(){
    return view('admin.video.index')->with([
        'title'=>'Video',
        'video'=>Video::paginate(5)
        ]
    );
}

public function create(){
    return view('admin.video.create')->with([
        'title'=>'Edit Video',
        ]
    );
}

public function store(Request $request){

    $video = new Video();
    $video->type = $request->type;

    $fl = $request->file;
    if ($request->hasFile('video')) {
    $file = $request->file('video');

    $destinationPath = public_path('video');

    // Move the file to the public/uploads directory
    $file->move($destinationPath, $file->getClientOriginalName());
    $fl = $file->getClientOriginalName();
}

    $video->file = $fl;
    $video->save();

    return back()->with('success', 'Video berhasil di tambah');

}

public function edit($id){
    return view('admin.video.edit')->with([
        'title'=>'Tambah Video',
        'video'=>Video::find($id)
        ]
    );
}
public function update(Request $request,$id){

    $video =  Video::find($id);
    $video->type = $request->type;
    $fl = $request->file;
    if ($request->hasFile('video')) {
    $file = $request->file('video');

    $destinationPath = public_path('video');

    // Move the file to the public/uploads directory
    $file->move($destinationPath, $file->getClientOriginalName());

    $fl = $file->getClientOriginalName();
    }
    $video->file = $fl;
    $video->update();

    return back()->with('success', 'Video berhasil di update');

}

public function delete($id){
    $video = Video::destroy($id);

    return back()->with('success', 'Video berhasil di hapus');
}
}