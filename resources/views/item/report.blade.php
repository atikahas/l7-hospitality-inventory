@extends('layouts.skydash')
@section('title', 'Item Management')
@section('item', 'active')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Order Management: Report</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-control form-control-sm" name="location_id"></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>SubLocation</label>
                                <select class="form-control form-control-sm" name="sublocation_id"></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control form-control-sm" name="category_id" ></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>SubCategory</label>
                                <select class="form-control form-control-sm" name="subcategory_id" ></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary mr-2">Filter</button>
                            <a href="" class="btn btn-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if(isset($_GET['location_id'], $_GET['category_id']))
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-right">
                        <a href="#" class="btn btn-primary" onclick="addEventListener( window.print())">Printer</a>
                    </h5>
                    <h4><b>ITEM MANAGEMENT REPORT</b></h4>
                    <table class="table table-bordered table-responsive ">
                        <thead>
                            <tr>
                                <th colspan="6">
                                
                                </th>
                            </tr>
                            <tr>
                                <th style="width:20%">Image</th>
                                <th style="width:10%">Category</th>
                                <th style="width:10%">SubCategory</th>
                                <th>Details</th>
                                <th style="width:5%">Quantity</th>
                                <th style="width:5%">Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    Item Name:
                                    <br>
                                    Item Description:
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif

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
            @if(isset($_GET['location_id']))
            $(".id").val("{{ $_GET['location_id'] }}");
            @endif
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
            @if(isset($_GET['sublocation_id']))
            $(".id").val("{{ $_GET['sublocation_id'] }}");
            @endif
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
            @if(isset($_GET['category_id']))
            $(".id").val("{{ $_GET['category_id'] }}");
            @endif
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
            @if(isset($_GET['subcategory_id']))
            $(".id").val("{{ $_GET['subcategory_id'] }}");
            @endif
        }
    });
}

</script>


@endsection