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
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sudah Bekerja</span>
                    <span class="info-box-number">
                        {{ $bekerja }}
                        <small></small>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-bag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Wiraswasta</span>
                    <span class="info-box-number">
                        {{ $wiraswasta }}
                        <small></small>
                    </span>
                </div>
            </div>
        </div>

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
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="biaya_2015"></div>

                </figure>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="biaya_2016"></div>

                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="biaya_2017"></div>

                </figure>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="biaya_2018"></div>

                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="biaya_2019"></div>

                </figure>
            </div>
        </div>

        {{-- <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="biaya_2016"></div>
                
              </figure>
        </div>
    </div> --}}
    </div>


    <script>
        // Data retrieved from https://netmarketshare.com
        Highcharts.chart('biaya_2015', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Darimana Sumber Biaya Anda Melanjutkan Studi Tahun Angkatan 2015',
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
                    name: 'Sendiri/Mandiri',
                    y: 0,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Beasiswa',
                    y: 0
                }]
            }]
        });

        Highcharts.chart('biaya_2016', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Darimana Sumber Biaya Anda Melanjutkan Studi Tahun Angkatan 2016',
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
                    name: 'Sendiri/Mandiri',
                    y: 1,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Beasiswa',
                    y: 0
                }]
            }]
        });

        Highcharts.chart('biaya_2017', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Darimana Sumber Biaya Anda Melanjutkan Studi Tahun Angkatan 2017',
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
                    name: 'Sendiri/Mandiri',
                    y: 0,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Beasiswa',
                    y: 0
                }]
            }]
        });

        Highcharts.chart('biaya_2018', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Darimana Sumber Biaya Anda Melanjutkan Studi Tahun Angkatan 2018',
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
                    name: 'Sendiri/Mandiri',
                    y: 0,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Beasiswa',
                    y: 0
                }]
            }]
        });

        Highcharts.chart('biaya_2019', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Darimana Sumber Biaya Anda Melanjutkan Studi Tahun Angkatan 2019',
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
                    name: 'Sendiri/Mandiri',
                    y: 2,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Beasiswa',
                    y: 0
                }]
            }]
        });
    </script>
@endsection
