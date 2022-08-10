@extends('layouts.skydash')
@section('title', 'Location')
<!-- @section('location_menu', 'side-dropdown show') -->
@section('location', 'active')
<!-- @section('view_location', 'active') -->
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
        <h4 class="card-title">Add Location</h4>
        <form class="forms-sample" action="" method="post">
        @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Location</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter location..." required>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">List Location</h4>
        <table id="listlocation" class="table table-bordered table-striped table-responsive table-hover">
          <thead>
            <tr>
              <th style="width:5%">No.</th>
              <th style="width:85%">Location Name</th>
              <th>Options</th>
            </tr>
          </thead>
          <?php $count = 0; ?>
          <tbody>
            @foreach($location as $l)
            <?php $count++; ?>
              <tr>
                <td>{{$count}}</td>
                <td>{{$l->name}}</td>
                <td>
                  <a href="{{url('location/edit/'.$l->id)}}" class="badge badge-secondary" data-toggle="tooltip" data-title="Edit User">
                  <i class="ti-pencil"></i>
                  </a>
                  <a href="javascript:;" class="badge badge-danger"  data-toggle="tooltip" data-title="Permanent Delete Location">
                  <i class="ti-trash"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



@endsection

@section('footerScripts')
<script>
  $(function () {
    $('#listlocation').DataTable({
      rowReorder: {
            selector: 'td:nth-child(2)'
        },
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'responsive'  : true,
      'autoWidth'   : true
    })
  })
</script>
@endsection