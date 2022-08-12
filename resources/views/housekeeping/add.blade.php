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
                <h6 class="font-weight-normal mb-0">Add housekeeping item.</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{url('wishlist/add/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Location & Category Information</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-control form-control-sm" name="location_id" required></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>SubLocation</label>
                                <select class="form-control form-control-sm" name="sublocation_id" required></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Category</label>
                                <select class="form-control form-control-sm" name="category_id" required></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">SubCategory</label>
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
                                <textarea class="form-control" rows="5" name="keterangan" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Item Image</label>
                                <div class="input-group control-group increment" >
                                    <input type="file" class="form-control file-upload-info" name="item_image" multiple>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-success" type="button"><i class="nav-icon fas fa-plus"></i> ADD</button>
                                    </span>
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
@endsection