@extends('admin.layouts.app')

@section('content')
<div class="row">
    <!--begin::Col-->
    <div class="col-lg-12">
      <!--begin::Small Box Widget 1-->
      <a href="{{route('slider-create')}}" class="btn btn-primary">Tambah slider</a>
<div class="card mt-2">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Text 1</th>
                    <th>Text 2</th>
                    <th>Text 3</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($slider)>0)
                    @foreach ($slider as $key=> $row )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->text1}}</td>
                        <td>{{$row->text2}}</td>
                        <td>{{$row->text3}}</td>
                        <td>
                            <a target="_blank" href="{{asset('gambar/'.$row->gambar)}}"><img style="width: 100px" src="{{asset('gambar/'.$row->gambar)}}"/></a>
                        </td>
                        <td>
                            <a href="{{route('slider-edit',['id'=>$row->id])}}">Edit</a> ||
                            <a onclick="return confirm('Yakin data ini mau di hapus?')" href="{{route('slider-delete',['id'=>$row->id])}}">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="mt-1">
            {{ $slider->links('pagination::bootstrap-5')  }}
        </div>
    </div>
</div>
      <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
  </div>
@endsection
