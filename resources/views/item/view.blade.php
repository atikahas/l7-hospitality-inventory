@extends('layouts.skydash')
@section('title', 'Item Details')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Item Management: Details</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            @csrf
                <h5 class="card-title text-right">
                    <a href="{{url('item/edit/'.$item->id)}}" class="badge badge-secondary" data-toggle="tooltip" data-title="Edit"><i class="ti-pencil"></i></a>
                    <a href="" class="badge badge-info" data-toggle="tooltip" data-title="Edit"><i class="ti-printer"></i></a>
                    <a href="{{ url()->previous() }}" class="badge badge-danger" data-toggle="tooltip" data-title="Edit"><i class="ti-close"></i></a>
                </h5>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table-bordered table-responsive">
                            <tr>
                                <td width="30%" rowspan="11">
                                @if(empty($item->item_image))
                                <img src="{{ url('skydash/template/images/default-image.jpeg') }}" class="img-fluid img-thumbnail" >
                                @else
                                <img src="{{ url('public/item_image/'.$item->item_image) }}" class="img-fluid img-thumbnail" >
                                @endif
                                </td>
                                <td colspan="4" style="background-color:#d8e3fe">Item Information</td>
                            </tr>
                            <tr>
                                <td width="15%">Item Name</td>
                                <td colspan="3">: {{$item->item_name}}</td>
                            </tr>
                            <tr>
                                <td>Details</td>
                                <td colspan="3">: {{$item->item_description}}</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="background-color:#d8e3fe">Location & Category Information</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>: {{$item->Location()}}</td>
                                <td>Category</td>
                                <td>: {{$item->SubLocation()}}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>: {{$item->Category()}}</td>
                                <td>SubCategory</td>
                                <td>: {{$item->SubCategory()}}</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="background-color:#d8e3fe">Purchase Information</td>
                            </tr>
                            <tr>
                                <td>Purchase Date</td>
                                <td>: {{$item->purchase_date}}</td>
                                <td>Purchase Price (RM)</td>
                                <td>: {{$item->purchase_price}}</td>
                            </tr>
                            <tr>
                                <td>Purchase Location</td>
                                <td>: {{$item->purchase_location}}</td>
                                <td>Purchase URL/link</td>
                                <td>: {{$item->purchase_link}}</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="background-color:#d8e3fe">Stock Information</td>
                            </tr>
                            <tr>
                                <td>Initial Stock</td>
                                <td>: {{$item->initial_stock}}</td>
                                <td>Current Stock</td>
                                <td>: {{$item->current_stock}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footerScripts')
<script>


</script>
@endsection