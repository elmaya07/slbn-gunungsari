@extends('admin.layouts.app')

@section('content')
<div class="row">
    <!--begin::Col-->
    <div class="col-lg-12">
      <!--begin::Small Box Widget 1-->
      <a href="{{route('galeri-create')}}" class="btn btn-primary">Tambah galeri</a>
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
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($galeri)>0)
                    @foreach ($galeri as $key=> $row )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->deskripsi}}</td>
                        <td>
                            <a target="_blank" href="{{asset('gambar/'.$row->gambar)}}"><img style="width: 100px" src="{{asset('gambar/'.$row->gambar)}}"/></a>
                        </td>
                        <td>
                            <a href="{{route('galeri-edit',['id'=>$row->id])}}">Edit</a> ||
                            <a onclick="return confirm('Yakin data ini mau di hapus?')" href="{{route('galeri-delete',['id'=>$row->id])}}">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="mt-1">
            {{ $galeri->links('pagination::bootstrap-5')  }}
        </div>

    </div>

</div>
      <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
  </div>
@endsection
