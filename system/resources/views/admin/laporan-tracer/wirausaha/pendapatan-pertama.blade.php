@extends('template.admin')

@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

@section('content')
    @include('section.notif')

    <style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 320px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }



        input[type="number"] {
            min-width: 50px;
        }
    </style>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    @include('admin.laporan-tracer.laporan')

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="">
<<<<<<< HEAD
=======
                <figure class="highcharts">
                    <div id="gaji_all"></div>

                </figure>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
>>>>>>> e4586ba35c58951628b951ff93b572b1bd656cca
                <figure class="highcharts">
                    <div id="gaji_all"></div>

                </figure>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($list_tahun as $tahun => $item)
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="pendapatan_pertama_{{ $tahun }}"></div>
                </figure>
            </div>
        </div>
    @endforeach
    </div>

    <script>
        Highcharts.chart('gaji_all', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
<<<<<<< HEAD
                text: 'Data Persentase Pendapatan Pertama Saat Bekerja',
=======
                text: 'Pendapatan Pertama Saat Bekerja',
>>>>>>> e4586ba35c58951628b951ff93b572b1bd656cca
                align: 'left'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
<<<<<<< HEAD
                        format: '<b>{point.name}</b>: {point.y} Orang ({point.percentage:.0f}%) '
=======
                        format: '<b>{point.name}</b>: {point.percentage:.0f} %'
>>>>>>> e4586ba35c58951628b951ff93b572b1bd656cca
                    }
                }
            },
            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: [{
                    name: 'Kurang Dari 3 Juta',
                    y: {{$kurang_3}},
                    sliced: true,
                    selected: true
                }, {
                    name: '3 Juta - 5 Juta',
                    y: {{$lebih_3}}
                }, {
                    name: 'Lebih Dari 5 Juta',
                    y: {{$lebih_5}}
                }]
            }]
        });
        // Data retrieved from https://netmarketshare.com
      
        function parseData(data) {
            result = []
            for (item of data) {
                result.push({
                    'name': item.label,
                    y: item.count
                })
            }
            result[0].sliced = true
            result[0].selected = true
            return result;
        }

        function createChart(tahun, item) {
            className = `pendapatan_pertama_${tahun}`
            data = parseData(item)
            Highcharts.chart(className, {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: `Data Persentase Pendapatan Pertama Saat Bekerja Alumni Tahun Angkatan ${tahun}`,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b> <br> Total : {point.y}'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.y} Orang ({point.percentage:.0f}%) '
                        }
                    }
                },
                series: [{
                    name: 'Jumlah',
                    colorByPoint: true,
                    data: data
                }]
            });
        }

        @foreach ($list_tahun as $tahun => $item)
            createChart({{ $tahun }}, @json($item))
        @endforeach
    </script>
@endsection
