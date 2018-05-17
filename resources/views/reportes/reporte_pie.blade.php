<div id="container" style="width:100%; height:400px;"></div>

@section('scripts')
<script type="text/javascript">
$(function () { 
var myChart = Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Estadistico de Documentos y Material Bibliografico'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: 
        [
        @foreach($documentos as $row)
        {
            name: '{{ $row->descripcion }}',
            y: {{ $row->cantidad }},
        }, 
        @endforeach
        ]
    }]
});


var myChart_2 = Highcharts.chart('container_barra', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Materiales subidos por los facilitadores'
        },
        plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
                }
            }
        },
        xAxis: {
            categories: [
                            @foreach($materiales as $f)
                                '{{ $f->nombre }}', 
                            @endforeach
                        ]
        },
        yAxis: {
            title: {
                text: 'cantidad'
            }
        },
        series: [
            {
                name: 'Material bibligrafico subido',
                data: [
                    @foreach($materiales as $fc)
                        {{ $fc->cantidad }},
                    @endforeach
                ]
            },
        ]
    });

});
</script>
@endsection