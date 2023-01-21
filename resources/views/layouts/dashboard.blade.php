@extends('layouts.admin1')
@section('content')

<div class="container">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">&nbsp;&nbsp;&nbsp;Dashboard</h1>

</div>


<!-- Content Row -->
<div class="container">
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                           Open</div>
                           @php
                           $total_open =App\Models\Ticketing::where('nama_stat','open')->get()->count();
                          @endphp
                          <div class="huge"><h5>{{$total_open}}</h5></div>

                    </div>
                    <div class="col-auto">

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           On Progress</div>
                           @php
                           $total_onprogress =App\Models\Ticketing::where('nama_stat','on progress')->get()->count();
                          @endphp
                         <div class="huge"><h5>{{$total_onprogress}}</h5></div>

                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                         Hold</div>
                         @php
                         $total_hold =App\Models\Ticketing::where('nama_stat','hold')->get()->count();
                        @endphp
                       <div class="huge"><h5>{{$total_hold}}</h5></div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Close</div>
                         @php
                         $total_close =App\Models\Ticketing::where('nama_stat','close')->get()->count();
                        @endphp
                       <div class="huge"><h5>{{$total_close}}</h5></div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>





<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->




@endsection
