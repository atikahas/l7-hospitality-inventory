@extends('layouts.skydash')
@section('title', 'Category')
@section('category', 'active')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Category Management</h3>
				<h6 class="font-weight-normal mb-0">Click button below to add category & subcategory.</h6>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-12 grid-margin">
		<p>
			<button class="btn btn-outline-primary btn-icon-text" type="button" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="false" aria-controls="collapseExample">
				<i class="ti-plus btn-icon-prepend"></i> Add Category
			</button>
			<button class="btn btn-outline-primary btn-icon-text" type="button" data-bs-toggle="collapse" data-bs-target="#subcategory" aria-expanded="false" aria-controls="collapseExample">
				<i class="ti-plus btn-icon-prepend"></i> Add SubCategory
			</button>
		</p>
		<div class="collapse" id="category">
			<div class="card grid-margin stretch-card">
				<div class="card-body">
					<h4 class="card-title">Add Category</h4>
					<form class="forms-sample" action="{{url('category/category/store')}}" method="post">
					@csrf
						<div class="form-group">
							<label>Location</label>
							<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter category..." required>
						</div>
						<button type="submit" class="btn btn-primary mr-2">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="collapse" id="subcategory">
			<div class="card grid-margin stretch-card">
				<div class="card-body">
					<h4 class="card-title">Add SubCategory</h4>
					<form class="forms-sample" action="{{url('category/subcategory/store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control form-control-md" name="category_id" required></select>
                            </div>
                        </div>
                        <div class="col-md-8">
							<div class="form-group">
								<label>SubCategory</label>
								<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter subcategory..." required>
							</div>
                        </div>
                    </div>
						<button type="submit" class="btn btn-primary mr-2">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
	  <div class="card">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs" id="category-list" role="allist">
					<li class="nav-item">
						<a class="nav-link active" href="#allist" role="tab" aria-controls="allist" aria-selected="true">All List</a>
					</li>
					<li class="nav-item">
						<a class="nav-link"  href="#history" role="tab" aria-controls="history" aria-selected="false">Category List</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#deals" role="tab" aria-controls="deals" aria-selected="false">SubCategory List</a>
					</li>
				</ul>
			</div>
			<div class="card-body">
				<div class="tab-content" style="border:0px;">
					<div class="tab-pane active" id="allist" role="tabpanel">
						<table id="listall" class="table table-bordered table-striped table-responsive table-hover">
						<thead>
							<tr>
							<th style="width:5%">No.</th>
							<th style="width:30%">Category</th>
							<th style="width:85%">SubCategory</th>
							</tr>
						</thead>
						<?php $count = 0; ?>
						<tbody>
								@foreach($allcategory as $a)
								<?php $count++; ?>
								<tr>
									<td>{{$count}}</td>
									<td>{{$a->category}}</td>
									<td>{{$a->subcategory}}</td>
								</tr>
								@endforeach
						</tbody>
						</table>
					</div>

					<div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">  
						<table id="listcategory" class="table table-bordered table-striped table-responsive table-hover">
						<thead>
							<tr>
							<th style="width:5%">No.</th>
							<th style="width:85%">Category</th>
							<th>Option</th>
							</tr>
						</thead>
						<?php $count = 0; ?>
						<tbody>
								@foreach($category as $c)
								<?php $count++; ?>
								<tr>
									<td>{{$count}}</td>
									<td>{{$c->name}}</td>
									<td>
										<a href="{{url('category/edit-category/'.$c->id)}}" class="badge badge-secondary" data-toggle="tooltip" data-title="Edit User">
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

					<div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
						<table id="listsubcategory" class="table table-bordered table-striped table-responsive table-hover">
						<thead>
							<tr>
							<th style="width:5%">No.</th>
							<th style="width:30%">Category</th>
							<th style="width:85%">SubCategory</th>
							<th>Option</th>
							</tr>
						</thead>
						<?php $count = 0; ?>
						<tbody>
								@foreach($allcategory as $a)
								<?php $count++; ?>
								@if($a->subcategory == '')
								@else
								<tr>
									<td>{{$count}}</td>
									<td>{{$a->category}}</td>
									<td>{{$a->subcategory}}</td>
									<td>
										<a href="{{url('category/edit-subcategory/'.$a->subcategory_id)}}" class="badge badge-secondary" data-toggle="tooltip" data-title="Edit User">
										<i class="ti-pencil"></i>
										</a>
										<a href="javascript:;" class="badge badge-danger"  data-toggle="tooltip" data-title="Permanent Delete Location">
										<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								@endif
								@endforeach
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footerScripts')

<script>

$('#category-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})


$(document).ready(function() {
    getCategory();
});

function getCategory() {
    $.ajax({
        url: "{{url('data/getCategory')}}",
        type: "GET",
        success: function(response) {
            console.log(response);
            var category = '';
            $.each(response, function(index,value) {
                category += '<option value="'+value.id+'">'+value.name+'</option>'
            });
            $("select[name=category_id]").html('<option value="">-- Select Category --</option>' + category);
        }
    });
}

  $(function () {
    $('#listall').DataTable();
	$('#listcategory').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
	$('#listsubcategory').DataTable({
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