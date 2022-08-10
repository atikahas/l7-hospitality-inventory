@extends('layouts.skydash')
@section('title', 'Location')
@section('location', 'active')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Location Management</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Location</h4>
        <form class="forms-sample" action="" method="post">
        @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Location</label>
            <input type="text" class="form-control" name="name" value="{{$location->name}}" required>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footerScripts')
@endsection