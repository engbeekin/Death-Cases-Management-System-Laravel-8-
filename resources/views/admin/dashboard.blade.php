@extends('layouts.master')
@section('title')
beekin company
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
               {{-- start --}}
                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Deaths</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1 class="text-center">{{$death}}   </h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-procedures fa-2x text-primary -300"></i>
                                    </div>
                                    <div class="card-footer">
                                        <a  class="ml-5 " href="{{route('death')}}">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- categories --}}
                       {{-- start --}}
                <!-- Content Row -->


                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           Total Hospitals</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1 class="text-center">{{$hospital}}   </h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hospital fa-2x text-primary -300"></i>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a  class="ml-5 " href="{{route('hospital')}}">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           Total Cities</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1 class="text-center">{{$city}}   </h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-city fa-2x text-primary -500"></i>
                                    </div>
                                    <div class="card-footer">
                                        <a  class="ml-5 " href="{{route('city')}}">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           Total Diseas</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1 class="text-center">{{$dis}}   </h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-disease fa-2x text-primary -500"></i>
                                    </div>
                                    <div class="card-footer">
                                        <a  class="ml-5 " href="{{route('diseas')}}">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           Total Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1 class="text-center">{{$user}}   </h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-primary -500"></i>
                                    </div>
                                    <div class="card-footer">
                                        <a  class="ml-5 " href="{{route('role')}}">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               {{-- end --}}
               {{-- end --}}
               {{--start High chart --}}
{{-- high chart --}}
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
      An area chart showing a gap in the data. By default, Highcharts treats
      <code>null</code> values as missing data, and will allow for gaps in
      datasets.
    </p>
  </figure>
  {{-- end high chart --}}
               {{-- end high chart --}}
        </div>
      </div>

    </div>


@endsection

@section('script')


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script type="text/javascript">
    var userData = <?php echo json_encode($deaths)?>;

    Highcharts.chart('container', {
        title: {
            text: 'New Deaths Growth, 2020- 2021'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Deaths'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Deaths',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>



@endsection
