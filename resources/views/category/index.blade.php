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
		<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="false" aria-controls="collapseExample">
			Category
		</button>
		<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#subcategory" aria-expanded="false" aria-controls="collapseExample">
			Subcategory
		</button>
		</p>

		<div class="collapse" id="category">
			<div class="card grid-margin stretch-card">
				<div class="card-body">
					<h4 class="card-title">Add Category</h4>
					<form class="forms-sample" action="" method="post">
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
					<form class="forms-sample" action="" method="post" enctype="multipart/form-data">
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
        <h4 class="card-title">List Category</h4>
        <table id="listlocation" class="table table-bordered table-striped table-responsive table-hover">
          <thead>
            <tr>
              <th style="width:5%">No.</th>
              <th style="width:30%">Category</th>
			  <th style="width:85%">SubCategory</th>
              <th>Options</th>
            </tr>
          </thead>
		  <?php $count = 0; ?>
          <tbody>
				@foreach($category as $c)
				<?php $count++; ?>
				<tr>
					<td>{{$count}}</td>
					<td>{{$c->name}}</td>
					<td>{{$c->name}}</td>
					<td>
						<a href="{{url('category/edit/'.$c->id)}}" class="badge badge-secondary" data-toggle="tooltip" data-title="Edit User">
						<i class="ti-pencil"></i>
						</a>
						<a href="javascript:;" class="badge badge-danger"  data-toggle="tooltip" data-title="Permanent Delete Category">
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
</script>

@endsection