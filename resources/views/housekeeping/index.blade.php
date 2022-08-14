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
							<th style="width:30%">Item</th>
							<th style="width:85%">Stock Status</th>
							</tr>
						</thead>
						<?php $count = 0; ?>
						<tbody>
								@foreach($housekeeping as $h)
								<?php $count++; ?>
								<tr>
									<td>{{$count}}</td>
									<td>{{$h->item_name}}</td>
									<td>
                    @if( ($h->current_stock - $h->initial_stock) < 0 )
                    <label class="badge badge-danger" style="width:50px">{{$h->current_stock - $h->initial_stock}}</label>
                    @elseif( ($h->current_stock - $h->initial_stock) == 0 )
                    <label class="badge badge-secondary" style="width:50px">{{$h->current_stock - $h->initial_stock}}</label>
                    @else
                    <label class="badge badge-success" style="width:50px">{{$h->current_stock - $h->initial_stock}}</label>
                    @endif
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

<style>
tr.collapse.in {
  display:table-row;
}</style>

@endsection