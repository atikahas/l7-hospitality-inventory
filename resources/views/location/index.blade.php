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
                    <h4>Latest Transaction</h4>
                </div>
                <div class="card-body"> 
                    <div class="table-responsive"> 
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Billing Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#SK2548	</th>
                                    <td>Neal Matthews</td>
                                    <td>07 Oct, 2022</td>
                                    <td>$400</td>
                                    <td><span class="text-success">Paid</span></td>
                                    <td>Mastercard</td>
                                    <td><button class="btn btn-primary">View Details</button></td>
                                </tr>

                                <tr>
                                    <th scope="row">#SK2548	</th>
                                    <td>Neal Matthews</td>
                                    <td>07 Oct, 2022</td>
                                    <td>$400</td>
                                    <td><span class="text-success">Paid</span></td>
                                    <td>Visa</td>
                                    <td><button class="btn btn-primary">View Details</button></td>
                                </tr>

                                <tr>
                                    <th scope="row">#SK2548	</th>
                                    <td>Neal Matthews</td>
                                    <td>07 Oct, 2022</td>
                                    <td>$400</td>
                                    <td><span class="text-danger">Chargeback</span></td>
                                    <td>Paypal</td>
                                    <td><button class="btn btn-primary">View Details</button></td>
                                </tr>

                                <tr>
                                    <th scope="row">#SK2548	</th>
                                    <td>Neal Matthews</td>
                                    <td>07 Oct, 2022</td>
                                    <td>$400</td>
                                    <td><span class="text-warning">Refund</span></td>
                                    <td>Visa</td>
                                    <td><button class="btn btn-primary">View Details</button></td>
                                </tr>
                            </tbody>
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