@extends('layouts.default')

@section('content')

<div class="container-fluid dashboard">
    <div class="content-header">
        <h1>{{ __('Dashboard') }}</h1>
        <p></p>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex align-items-center">
                            <i class="fas fa-inbox icon-home bg-primary text-light"></i>
                        </div>
                        <div class="col-8">
                            <p>TOTAL EXPENSES</p>
                            <h5>$65</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex align-items-center">
                            <i class="fa fa-shopping-bag icon-home bg-primary text-light"></i>
                        </div>
                        <div class="col-8">
                            <p>TOTAL ITEM</p>
                            <h5>3000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex align-items-center">
                            <i class="fa fa-user icon-home bg-primary text-light"></i>
                        </div>
                        <div class="col-8">
                            <p>TOTAL EMPLOYEE</p>
                            <h5>256</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
