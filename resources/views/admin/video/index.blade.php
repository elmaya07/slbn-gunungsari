@extends('admin.layouts.app')

@section('content')
<div class="row">
    <!--begin::Col-->
    <div class="col-lg-12">
      <!--begin::Small Box Widget 1-->
      <a href="{{route('video-create')}}" class="btn btn-primary">Tambah video</a>
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
                    <th>File</th>
                    <th>Type</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($video)>0)
                    @foreach ($video as $key=> $row )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->file}}</td>
                        <td>{{$row->type}}</td>
                        <td>
                            <a href="{{route('video-edit',['id'=>$row->id])}}">Edit</a> ||
                            <a onclick="return confirm('Yakin data ini mau di hapus?')" href="{{route('video-delete',['id'=>$row->id])}}">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="mt-1">
            {{ $video->links('pagination::bootstrap-5')  }}
        </div>

    </div>

</div>
      <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
  </div>
@endsection
