@extends('layouts.skydash')
@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Dashboard</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Total Location</p>
                <p class="fs-30 mb-2">{{$totallocation}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Total Category</p>
                <p class="fs-30 mb-2">{{$totalcategory}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Total SubCategory</p>
                <p class="fs-30 mb-2">{{$totalsubcategory}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card">
            <div class="card-body">
                <p class="mb-4">Housekeeping</p>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <div class="row">
                      <div class="col-md-6 border-right">
                        <p class="fs-30 mb-2">{{$currentstockhousekeeping}}</p>
                        <p>Current Item Quantity</p>
                      </div>
                      <div class="col-md-6">
                        <p class="fs-30 mb-2 text-danger">{{$reorderstockhousekeeping}}</p>
                        <p>Need Reorder Quantity</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card">
            <div class="card-body">
                <p class="mb-4">Cutleries</p>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <div class="row">
                      <div class="col-md-6 border-right">
                        <p class="fs-30 mb-2">{{$currentstockcutleries}}</p>
                        <p>Current Item Quantity</p>
                      </div>
                      <div class="col-md-6">
                        <p class="fs-30 mb-2 text-danger">{{$reorderstockcutleries}}</p>
                        <p>Need Reorder Quantity</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card position-relative">
        <div class="card-body">
          <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md- col-xl-3 d-flex flex-column justify-content-start">
                    <div class="ml-xl-4 mt-3">
                      <p class="card-title">Detailed Reports Housekeeping</p>
                      <h1 class="text-primary">{{$counthousekeeping}}</h1>
                      <h3 class="font-weight-500 mb-xl-4 text-primary">Total Housekeeping Item</h3>
                      <p class="mb-2 mb-xl-0">The total number of item based on housekeeping category.</p>
                    </div>  
                  </div>
                  <div class="col-md-12 col-xl-9">
                    <div class="row">
                      <div class="col-md-12 border-right">
                        <div class="table-responsive mb-3 mb-md-0 mt-3">
                          <table class="table table-borderless report-table">
                            @foreach($stockhousekeeping as $s)
                            <tr>
                              <td class="text-muted">{{$s->subcategory}}</td>
                              <td class="w-100 px-0">
                                <div class="progress progress-md mx-4">
                                  @if($s->percentstock > 69)
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  @elseif($s->percentstock < 70 and $s->percentstock > 29)
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  @elseif($s->percentstock < 30)
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  @endif
                                </div>
                              </td>
                              <td><h5 class="font-weight-bold mb-0">{{$s->currentstock}} / {{$s->initialstock}}</h5></td>
                            </tr>
                            @endforeach
                          </table>
                        </div>
                      </div>
                      <!-- <div class="col-md-6 mt-3">
                      <canvas id="north-america-chart"></canvas>
                      <div id="north-america-legend"></div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="carousel-item">
              <div class="row">
              <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
              <div class="ml-xl-4 mt-3">
              <p class="card-title">Detailed Reports Cutleries</p>
              <h1 class="text-primary">{{$countcutleries}}</h1>
              <h3 class="font-weight-500 mb-xl-4 text-primary">Total Cutleries Item</h3>
              <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
              </div>  
              </div>
              <div class="col-md-12 col-xl-9">
              <div class="row">
              <div class="col-md-12 border-right">
              <div class="table-responsive mb-3 mb-md-0 mt-3">
              <table class="table table-borderless report-table">
              @foreach($stockcutleries as $c)
              <tr>
              <td class="text-muted">{{$c->subcategory}}</td>
              <td class="w-100 px-0">
              <div class="progress progress-md mx-4">
              @if($c->percentstock > 69)
              <div class="progress-bar bg-primary" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @elseif($c->percentstock < 70 and $c->percentstock > 29)
              <div class="progress-bar bg-warning" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @elseif($c->percentstock < 30)
              <div class="progress-bar bg-danger" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              @endif
              </div>
              </td>
              <td><h5 class="font-weight-bold mb-0">{{$c->currentstock}} / {{$c->initialstock}}</h5></td>
              </tr>
              @endforeach
              </table>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div> -->
              </div>
              <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
