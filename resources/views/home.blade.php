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
        <div class="card card-green">
            <div class="card-body" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <p class="mb-4">Total Location</p>
                <p class="fs-30 mb-2">{{$totallocation}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-green">
            <div class="card-body">
                <p class="mb-4">Total Category</p>
                <p class="fs-30 mb-2">{{$totalcategory}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-green">
            <div class="card-body">
                <p class="mb-4">Total SubCategory</p>
                <p class="fs-30 mb-2">{{$totalsubcategory}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-4 stretch-card transparent collapse multi-collapse" id="multiCollapseExample1">
      <div>
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Total Location</p>
                <p class="fs-30 mb-2">{{$totallocation}}</p>
            </div> 
          </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
      <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Total Location</p>
                <p class="fs-30 mb-2">{{$totallocation}}</p>
            </div> 
          </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
      <div class="collapse multi-collapse" id="multiCollapseExample3">
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Total Location</p>
                <p class="fs-30 mb-2">{{$totallocation}}</p>
            </div> 
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
                        @foreach($reorderstockhousekeeping as $r)
                        <p class="fs-30 mb-2 text-danger">{{$r->balance}}</p>
                        @endforeach
                        <p>Item Need to Purchase Quantity</p>
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
                        @foreach($reorderstockcutleries as $r)
                        <p class="fs-30 mb-2 text-danger">{{$r->balance}}</p>
                        @endforeach
                        <p>Item Need to Purchase Quantity</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card position-relative">
      <div class="card-body">
      <p class="mb-4">List Item Housekeeping By Category</p>
        <div class="row">
          <div class="table-responsive mb-3 mb-md-0 mt-3">
            <table class="table table-borderless report-table">
              @foreach($stockhousekeeping as $s)
              <tr>
                <td class="text-muted">
                  @if($s->percentstock < 30 or $s->percentstock == 0)
                  <label class="badge badge-danger"><b>{{$s->subcategory}}<i class="ti-alert btn-icon-prepend"></i></b></label> 
                  @else
                  {{$s->subcategory}}
                  @endif
                </td>
                <td class="w-100 px-0">
                  <div class="progress progress-md mx-4">
                    @if($s->percentstock > 69 and $s->percentstock < 101)
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($s->percentstock > 100)
                    <div class="progress-bar bg-info" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($s->percentstock < 70 and $s->percentstock > 29)
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($s->percentstock < 30)
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{$s->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @endif
                  </div>
                </td>
                <td><h5 class="font-weight-bold mb-0 text-right">{{$s->currentstock}} / {{$s->initialstock}}</h5></td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card position-relative">
      <div class="card-body">
      <p class="mb-4">List Item Cutleries By Category</p>
        <div class="row">
          <div class="table-responsive mb-3 mb-md-0 mt-3">
            <table class="table table-borderless report-table">
              @foreach($stockcutleries as $c)
              <tr>
                <td class="text-muted">
                  @if($c->percentstock < 30 or $c->percentstock == 0)
                  <label class="badge badge-danger"><b>{{$c->subcategory}}<i class="ti-alert btn-icon-prepend"></i></b></label> 
                  @else
                  {{$c->subcategory}}
                  @endif
                </td>
                <td class="w-100 px-0">
                  <div class="progress progress-md mx-4">
                    @if($c->percentstock > 69 and $c->percentstock < 101)
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($c->percentstock > 100)
                    <div class="progress-bar bg-info" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($c->percentstock < 70 and $c->percentstock > 29)
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($c->percentstock < 30)
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{$c->percentstock}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    @endif
                  </div>
                </td>
                <td><h5 class="font-weight-bold mb-0 text-right">{{$c->currentstock}} / {{$c->initialstock}}</h5></td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
