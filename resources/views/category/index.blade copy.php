@extends('layouts.default')
@section('title', 'Location')
@section('location_menu', 'side-dropdown show')
@section('location', 'active')
@section('view_location', 'active')
@section('content')

<div class="container-fluid dashboard">
    <div class="content-header">
        <h1>Location</h1>
        <p></p>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <form action="" method="post">
                @csrf
                    <div class="card-body"> 
                        <div class="mb-3">
                            <label>Category</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter location..." required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add SubCategory</h4>
                </div>
                <form action="" method="post">
                @csrf
                    <div class="card-body"> 
                        <div class="mb-3">
                            <label>SubCategory</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter location..." required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Category & SubCategory</h4>
                </div>
                <div class="card-body"> 
                    <div class="table-responsive"> 
                        
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