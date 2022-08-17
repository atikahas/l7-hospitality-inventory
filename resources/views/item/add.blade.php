@extends('layouts.skydash')
@section('title', 'Item Management')
<!-- @section('location_menu', 'side-dropdown show') -->
@section('item_management', 'active')
<!-- @section('view_location', 'active') -->
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Item Management</h3>
                <h6 class="font-weight-normal mb-0">Add housekeeping item.</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{url('item/add/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Location & Category Information</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-control form-control-sm" name="location_id" required></select>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label>SubLocation</label>
                                <select class="form-control form-control-sm" name="sublocation_id" required></select>
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control form-control-sm" name="category_id" required></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>SubCategory</label>
                                <select class="form-control form-control-sm" name="subcategory_id" required></select>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Item Information</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input type="text" class="form-control" name="item_name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Item Detail</label>
                                <textarea class="form-control" rows="5" name="item_description" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Item Image</label>
                                <div class="input-group control-group increment" >
                                    <input type="file" class="form-control file-upload-info" name="lampiran">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchased Date</label>
                                <input type="date" class="form-control" name="purchase_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Price (RM) Per Unit</label>
                                <input type="text" class="form-control" name="purchase_price" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Shop/Location</label>
                                <input type="text" class="form-control" name="purchase_location" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase URL/Link</label>
                                <input type="text" class="form-control" name="purchase_link" required>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Stock Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Initial Stock</label>
                                <input type="text" class="form-control" name="initial_stock" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Stock</label>
                                <input type="text" class="form-control" name="current_stock" required>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footerScripts')
<script>

$(document).ready(function() {
    getLocation();
});

$(document).on("change", "select[name=location_id]", function() {
    var location = $(this).val();
    getSubLocation(location);
});

function getLocation() {
    $.ajax({
        url: "{{url('data/getLocation')}}",
        type: "GET",
        success: function(response) {
            console.log(response);
            var location = '';
            $.each(response, function(index,value) {
                location += '<option value="'+value.id+'">'+value.name+'</option>'
            });
            $("select[name=location_id]").html('<option value="">-- Select Location --</option>' + location);
        }
    });
}

function getSubLocation(location) {
    $.ajax({
        url: "{{url('data/getSubLocation')}}",
        type: "GET",
        data: "location_id=" + location,
        success: function(response) {
            console.log(response);
            var sublocation = '';
            $.each(response, function(index,value) {
                sublocation += '<option value="'+value.id+'">'+value.name+'</option>'
            });
            $("select[name=sublocation_id]").html('<option value="">-- Select SubLocation --</option>' + sublocation);
        }
    });
}

$(document).ready(function() {
    getCategory();
});

$(document).on("change", "select[name=category_id]", function() {
    var category = $(this).val();
    getSubCategory(category);
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

function getSubCategory(category) {
    $.ajax({
        url: "{{url('data/getSubCategory')}}",
        type: "GET",
        data: "category_id=" + category,
        success: function(response) {
            console.log(response);
            var subcategory = '';
            $.each(response, function(index,value) {
                subcategory += '<option value="'+value.id+'">'+value.name+'</option>'
            });
            $("select[name=subcategory_id]").html('<option value="">-- Select SubCategory --</option>' + subcategory);
        }
    });
}

</script>
@endsection