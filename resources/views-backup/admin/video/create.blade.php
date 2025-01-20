@extends('admin.layouts.app')

@section('content')
<div class="row" ng-controller="ctrl">
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
        <form action="{{route('video-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="">Type</label>
                <select name="type" ng-model="form.type" ng-change="setType()" id="type"  class="form-control">
                    <option value="local">Local</option>
                    <option value="youtube">Youtube</option>
                    <option value="instagram">Instagram</option>
                </select>
            </div>
            <span ng-if="form.type=='youtube'">contoh: https://youtu.be/UW4udCiacj4?si=jCZgSY48FxU2jsci <small style="color:red">Yang di ambil hanya "UW4udCiacj4?si=jCZgSY48FxU2jsci"</small> </span>
            <div class="form-group mb-2" ng-if="form.type!=='local'">
                <label for="">File</label>
                <input type="text" class="form-control" name="file" id="file" required>
            </div>
            <div class="form-group mb-2" ng-if="form.type=='local'">
                <input type="file" name="video" id="video" required>
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

@section('js')
<script>
    app.controller('ctrl',function($scope){
        $scope.form = {
            type:'local',
        }

        $scope.setType = function(){

        }
    })
</script>
@endsection
