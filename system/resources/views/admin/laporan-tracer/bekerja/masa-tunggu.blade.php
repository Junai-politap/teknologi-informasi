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

<<<<<<< HEAD
=======

>>>>>>> e4586ba35c58951628b951ff93b572b1bd656cca


        input[type="number"] {
            min-width: 50px;
        }
    </style>
    <script src="https://code.highcharts.com/highcharts.js"></script>
  @include('admin.laporan-tracer.laporan')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="">
                <figure class="highcharts">
                    <div id="masa_tunggu_all"></div>
                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($list_tahun as $tahun => $item)
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box">
                    <figure class="highcharts">
                        <div id="masa_tunggu_{{ $tahun }}"></div>
                    </figure>
                </div>
            </div>
        @endforeach
    </div>

<<<<<<< HEAD
    <script>
        Highcharts.chart('masa_tunggu_all', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan',
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
                        format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                    }
                }
            },
            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: [{
                    name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                    y: {{ $langsung_bekerja }},
                    sliced: true,
                    selected: true
                }, {
                    name: 'Waktu Tunggu Kurang dari 3 Bulan',
                    y: {{ $kurang_dari_3_bulan }}
                }, {
                    name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                    y: {{ $kurang_dari_6_bulan }}
                }, {
                    name: 'Waktu Tunggu Lebih dari 6 Bulan',
                    y: {{ $lebih_dari_6_bulan }}

                }]
=======
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-university"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Studi Lanjut</span>
                <span class="info-box-number">
                    {{ $studi_lanjut }}
                    <small></small>
                </span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Belum Bekerja</span>
                <span class="info-box-number">
                    {{ $belum_bekerja }}
                    <small></small>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-12 col-md-12">
        <div class="">
            <figure class="highcharts">
                <div id="masa_tunggu_all"></div>

            </figure>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="masa_tunggu_2015"></div>

            </figure>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="masa_tunggu_2016"></div>

            </figure>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="masa_tunggu_2017"></div>

            </figure>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="masa_tunggu_2018"></div>

            </figure>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="masa_tunggu_2019"></div>

            </figure>
        </div>
    </div>

    {{-- <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="masa_tunggu_2016"></div>
                
              </figure>
        </div>
    </div> --}}
</div>


<script>
    
    Highcharts.chart('masa_tunggu_all', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan',
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
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                y: {{$langsung_bekerja}},
                sliced: true,
                selected: true
            }, {
                name: 'Waktu Tunggu Kurang dari 3 Bulan',
                y: {{$kurang_dari_3_bulan}}
            }, {
                name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                y: {{$kurang_dari_6_bulan}}
            }, {
                name: 'Waktu Tunggu Lebih dari 6 Bulan',
                y: {{$lebih_dari_6_bulan}}

            }]
        }]
    });

    // Data retrieved from https://netmarketshare.com
    Highcharts.chart('masa_tunggu_2015', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan Tahun Angkatan 2015',
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
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                y: 5,
                sliced: true,
                selected: true
            }, {
                name: 'Waktu Tunggu Kurang dari 3 Bulan',
                y: 6
            }, {
                name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                y: 4
            }, {
                name: 'Waktu Tunggu Lebih dari 6 Bulan',
                y: 9

            }]
        }]
    });

    Highcharts.chart('masa_tunggu_2016', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan Tahun Angkatan 2016',
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
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                y: 5,
                sliced: true,
                selected: true
            }, {
                name: 'Waktu Tunggu Kurang dari 3 Bulan',
                y: 10
            }, {
                name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                y: 9
            }, {
                name: 'Waktu Tunggu Lebih dari 6 Bulan',
                y: 25

            }]
        }]
    });

    Highcharts.chart('masa_tunggu_2017', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan Tahun Angkatan 2017',
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
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                y: 4,
                sliced: true,
                selected: true
            }, {
                name: 'Waktu Tunggu Kurang dari 3 Bulan',
                y: 18
            }, {
                name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                y: 7
            }, {
                name: 'Waktu Tunggu Lebih dari 6 Bulan',
                y: 7

>>>>>>> e4586ba35c58951628b951ff93b572b1bd656cca
            }]
        });

        function parseData(data) {
            result = []
            for (item of data) {
                result.push({
                    'name': item.label,
                    y: item.count
                })
            }
<<<<<<< HEAD
            result[0].sliced = true
            result[0].selected = true
            return result;
        }

        function createChart(tahun, item) {
            className = `masa_tunggu_${tahun}`
            data = parseData(item)
            Highcharts.chart(className, {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: `Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan Tahun Angkatan ${tahun}`,
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
=======
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                y: 5,
                sliced: true,
                selected: true
            }, {
                name: 'Waktu Tunggu Kurang dari 3 Bulan',
                y: 11
            }, {
                name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                y: 2
            }, {
                name: 'Waktu Tunggu Lebih dari 6 Bulan',
                y: 3

            }]
        }]
    });

    Highcharts.chart('masa_tunggu_2019', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Persentase Masa Tunggu Alumni Mendapat Pekerjaan Tahun Angkatan 2019',
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
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus',
                y: 3,
                sliced: true,
                selected: true
            }, {
                name: 'Waktu Tunggu Kurang dari 3 Bulan',
                y: 8
            }, {
                name: 'Waktu Tunggu Antara 3 - 6 Bulan',
                y: 3
            }, {
                name: 'Waktu Tunggu Lebih dari 6 Bulan',
                y: 5

            }]
        }]
    });
</script>
@endsection
>>>>>>> e4586ba35c58951628b951ff93b572b1bd656cca
