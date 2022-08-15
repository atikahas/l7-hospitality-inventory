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
            <table id="listhousekeeping" class="table table-bordered table-striped table-responsive table-hover">
						<thead>
							<tr>
							<th style="width:5%">No.</th>
              <th>Location</th>
              <th>Category</th>
              <th>SubCategory</th>
							<th>Item</th>
              <th>In Stock</th>
							<th>Stock Status</th>
              <th>Option</th>
							</tr>
						</thead>
						<?php $count = 0; ?>
						<tbody>
								@foreach($housekeeping as $house=>$h)
								<?php $count++; ?>
								<tr>
									<td>{{$count}}</td>
                  <td>{{$h->location}}</td>
                  <td>{{$h->category}}</td>
                  <td>{{$h->subcategory}}</td>
									<td>{{$h->item_name}}</td>
                  <td class="text-right">{{$h->current_stock}}</td>
                  @if( ($h->current_stock - $h->initial_stock) < 0 )
                  <td class="text-danger text-right">{{$h->current_stock - $h->initial_stock}} <i class="ti-arrow-down"></i></td>
                  @elseif( ($h->current_stock - $h->initial_stock) == 0 )
                  <td class="text-right">{{$h->current_stock - $h->initial_stock}}</td>
                  @else
                  <td class="text-success text-right">{{$h->current_stock - $h->initial_stock}} <i class="ti-arrow-up"></i></td>
                  @endif
                  <td class="text-center">
                    <a href="{{url('housekeeping/view/'.$h->id)}}" class="badge badge-info" data-toggle="tooltip" data-title="Edit">
										<i class="ti-eye"></i>
										</a>
                    <a href="{{url('housekeeping/edit/'.$h->id)}}" class="badge badge-secondary" data-toggle="tooltip" data-title="Edit">
										<i class="ti-pencil"></i>
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

<script>
  $( function() {
    $( "#progressbar" ).progressbar({
      value: 37
    });
  } );
  </script>

@endsection