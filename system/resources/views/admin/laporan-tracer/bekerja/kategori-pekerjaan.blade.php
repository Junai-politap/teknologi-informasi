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
                    <div id="kategori_2015"></div>

                </figure>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="kategori_2016"></div>

                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="kategori_2017"></div>

                </figure>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="kategori_2018"></div>

                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="kategori_2019"></div>

                </figure>
            </div>
        </div>

        {{-- <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="kategori_2016"></div>
                
              </figure>
        </div>
    </div> --}}
    </div>


    <script>
        // Data retrieved from https://netmarketshare.com
        Highcharts.chart('kategori_2015', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Kategori/Tingkat Perusahaan Tahun Angkatan 2015',
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
                    name: 'Instansi Pemerintahan (termasuk BUMN)',
                    y: 13,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perusahaan Lokal',
                    y: 5
                }, {
                    name: 'Perusahaan Nasional',
                    y: 5
                }, {
                    name: 'Perusahaan Multinasional/Internasional',
                    y: 1

                }]
            }]
        });

        Highcharts.chart('kategori_2016', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Kategori/Tingkat Perusahaan Tahun Angkatan 2016',
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
                    name: 'Instansi Pemerintahan (termasuk BUMN)',
                    y: 26,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perusahaan Lokal',
                    y: 19
                }, {
                    name: 'Perusahaan Nasional',
                    y: 3
                }, {
                    name: 'Perusahaan Multinasional/Internasional',
                    y: 1

                }]
            }]
        });

        Highcharts.chart('kategori_2017', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Kategori/Tingkat Perusahaan Tahun Angkatan 2017',
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
                    name: 'Instansi Pemerintahan (termasuk BUMN)',
                    y: 11,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perusahaan Lokal',
                    y: 20
                }, {
                    name: 'Perusahaan Nasional',
                    y: 6
                }, {
                    name: 'Perusahaan Multinasional/Internasional',
                    y: 1

                }]
            }]
        });

        Highcharts.chart('kategori_2018', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Kategori/Tingkat Perusahaan Tahun Angkatan 2018',
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
                    name: 'Instansi Pemerintahan (termasuk BUMN)',
                    y: 11,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perusahaan Lokal',
                    y: 7
                }, {
                    name: 'Perusahaan Nasional',
                    y: 3
                }, {
                    name: 'Perusahaan Multinasional/Internasional',
                    y: 0

                }]
            }]
        });

        Highcharts.chart('kategori_2019', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Kategori/Tingkat Perusahaan Tahun Angkatan 2019',
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
                    name: 'Instansi Pemerintahan (termasuk BUMN)',
                    y: 7,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perusahaan Lokal',
                    y: 6
                }, {
                    name: 'Perusahaan Nasional',
                    y: 5
                }, {
                    name: 'Perusahaan Multinasional/Internasional',
                    y: 1

                }]
            }]
        });
    </script>
@endsection
