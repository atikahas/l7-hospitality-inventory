@extends('layouts.skydash')
@section('title', 'Category')
@section('category', 'active')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Category Management</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-12 grid-margin">
        <div class="card grid-margin stretch-card">
            <div class="card-body">
                <h4 class="card-title">Edit SubCategory</h4>
                <form class="forms-sample" action="" method="post">
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
                            <input type="text" class="form-control" name="name" value="{{$subcategory->name}}" placeholder="Enter subcategory..." required>
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
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