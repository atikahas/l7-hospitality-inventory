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
                <h4 class="card-title">Edit Category</h4>
                <form class="forms-sample" action="" method="post">
                @csrf
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Enter category..." required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-text">Save</button>
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