@extends('layouts.default')
@section('title', 'Location')
@section('location', 'active')
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
                    <h4>Edit Location</h4>
                </div>
                <form action="" method="post">
                @csrf
                    <div class="card-body"> 
                        <div class="mb-3">
                            <label>Location</label>
                            <input type="text" class="form-control" name="name" value="{{$location->name}}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Save</button>
                    </div>
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