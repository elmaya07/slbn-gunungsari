@extends('admin.layouts.app')

@section('content')
<div class="row">
    <!--begin::Col-->
    <div class="col-lg-12">
      <!--begin::Small Box Widget 1-->

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
        <form action="{{route('slider-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="">Text 1</label>
                <input type="text" class="form-control" name="text1" id="text1" required>
            </div>
            <div class="form-group mb-2">
                <label for="">Text 2</label>
                <input type="text" class="form-control" name="text2" id="text2" required>
            </div>
            <div class="form-group mb-2">
                <label for="">Text 3</label>
                <input type="text" class="form-control" name="text3" id="text3" required>
            </div>
            <div class="form-group mb-2">
                <input type="file" name="gambar" id="gambar" required>
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Batal</button>
            </div>
        </form>

    </div>
</div>
      <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
  </div>
@endsection
