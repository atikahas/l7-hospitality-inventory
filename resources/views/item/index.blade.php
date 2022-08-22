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
                <h3 class="font-weight-bold">Item Management: List</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <a href="{{url('item/add')}}" class="btn btn-sm btn-primary btn-icon-text" data-toggle="tooltip" data-title="Edit User">
            <i class="ti-plus btn-icon-prepend"></i> Add Item
            </a>
            <a href="{{url('item/report')}}" class="btn btn-sm btn-primary btn-icon-text" data-toggle="tooltip" data-title="Edit User">
            <i class="ti-printer btn-icon-prepend"></i> Generate Report
            </a>
          </div>
        </div>
        <table id="listhousekeeping" class="table table-bordered table-striped table-responsive table-hover">
          <thead>
            <tr>
              <th style="width:5%">No.</th>
              <th>Location</th>
              <th>Category</th>
              <th>SubCategory</th>
              <th>Item</th>
              <th>In Stock</th>
              <th style="width:5%">Option</th>
            </tr>
          </thead>
          <?php $count = 0; ?>
          <tbody>
            @foreach($item as $items=>$i)
            <?php $count++; ?>
            <tr>
              <td>{{$count}}</td>
              <td>{{$i->location}}</td>
              <td>{{$i->category}}</td>
              <td>{{$i->subcategory}}</td>
              <td>{{$i->item_name}}</td>
              <td class="text-right">
              <div class="progress progress-md">
              @if($i->percentstock > 69 and $i->percentstock < 101)
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$i->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @elseif($i->percentstock > 100)
              <div class="progress-bar bg-info" role="progressbar" style="width: {{$i->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @elseif($i->percentstock < 70 and $i->percentstock > 29)
              <div class="progress-bar bg-warning" role="progressbar" style="width: {{$i->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @elseif($i->percentstock < 30)
              <div class="progress-bar bg-danger" role="progressbar" style="width: {{$i->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @endif
              </div>
              {{$i->current_stock}} / {{$i->initial_stock}}
              </td>
              <td class="text-center">
              <a href="{{url('item/view/'.$i->id)}}" class="badge badge-info">
              View 
              </a>
              <a href="{{url('item/edit/'.$i->id)}}" class="badge badge-warning">
              Edit
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
	$('#listhousekeeping').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });
</script>


@endsection