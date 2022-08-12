@extends('layouts.skydash')
@section('title', 'Housekeeping')
<!-- @section('location_menu', 'side-dropdown show') -->
@section('housekeeping', 'active')
<!-- @section('view_location', 'active') -->
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Housekeeping Management</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin">
        <a href="{{url('housekeeping/add')}}" class="btn btn-outline-primary btn-icon-text" data-toggle="tooltip" data-title="Edit User">
            <i class="ti-plus btn-icon-prepend"></i> Add Item
        </a>
  </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">List Housekeeping Item</h4>
            
      </div>
    </div>
  </div>
</div>



@endsection

@section('footerScripts')
@endsection