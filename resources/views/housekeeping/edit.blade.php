@extends('layouts.skydash')
@section('title', 'Housekeeping')
@section('housekeeping', 'active')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Housekeeping Management</h3>
                <h6 class="font-weight-normal mb-0">Edit housekeeping item.</h6>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                @csrf
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Location & Category Information</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location_id" value="{{$housekeeping->Location()}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>SubLocation</label>
                                    @if(empty($housekeeping->sublocation_id))
                                    <input type="text" class="form-control" name="sublocation_id" value="" disabled>
                                    @else
                                    <input type="text" class="form-control" name="sublocation_id" value="{{$housekeeping->SubLocation()}}" disabled>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category</label>
                                    @if(empty($housekeeping->category_id))
                                    <input type="text" class="form-control" name="sublocation_id" value="" disabled>
                                    @else
                                    <input type="text" class="form-control" name="sublocation_id" value="{{$housekeeping->Category()}}" disabled>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>SubCategory</label>
                                    @if(empty($housekeeping->subcategory_id))
                                    <input type="text" class="form-control" name="subcategory_id" value="" disabled>
                                    @else
                                    <input type="text" class="form-control" name="subcategory_id" value="{{$housekeeping->SubCategory()}}" disabled>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Item Information</h5>
                    <div class="row">
                        <div class="col-md-3">
                            @if(empty($housekeeping->item_image))
                            <img src="{{ url('skydash/template/images/default-image.jpeg') }}" class="img-fluid img-thumbnail" >
                            @else
                            <img src="{{ url('public/housekeeping_image/'.$housekeeping->item_image) }}" class="img-fluid img-thumbnail" >
                            @endif
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input type="text" class="form-control" name="item_name" value="{{$housekeeping->item_name}}" required>
                            </div>
                            <div class="form-group">
                                <label>Item Detail</label>
                                <textarea class="form-control" rows="5" name="item_description">{{$housekeeping->item_description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Item Image</label>
                                <input type="file" class="form-control file-upload-info" name="lampiran">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchased Date</label>
                                <input type="date" class="form-control" name="purchase_date" value="{{$housekeeping->purchase_date}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Price (RM) Per Unit</label>
                                <input type="text" class="form-control" name="purchase_price" value="{{$housekeeping->purchase_price}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Shop/Location</label>
                                <input type="text" class="form-control" name="purchase_location" value="{{$housekeeping->purchase_location}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase URL/Link</label>
                                <input type="text" class="form-control" name="purchase_link" value="{{$housekeeping->purchase_link}}">
                            </div>
                        </div>
                    </div>
                    <h5 class="text-dark pl-1" style="background-color:#d8e3fe">Stock Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Initial Stock</label>
                                <input type="text" class="form-control" name="initial_stock" value="{{$housekeeping->initial_stock}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Stock</label>
                                <input type="text" class="form-control" name="current_stock" value="{{$housekeeping->current_stock}}">
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


</script>
@endsection