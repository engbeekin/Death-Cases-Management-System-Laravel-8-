@extends('layouts.master')
@section('title')
beekin company
@endsection

@section('content')
{{-- high chart --}}
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
      An area chart showing a gap in the data. By default, Highcharts treats
      <code>null</code> values as missing data, and will allow for gaps in
      datasets. kalid
    </p>
  </figure>
  {{-- end high chart --}}





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
// bar chart


@endsection
