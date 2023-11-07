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
    <div class="col-12 col-sm-12 col-md-12">
        <div class="">
            <figure class="highcharts">
                <div id="chart_2"></div>

            </figure>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="kesesuaian_2015"></div>

            </figure>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="kesesuaian_2016"></div>

            </figure>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="kesesuaian_2017"></div>

            </figure>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="kesesuaian_2018"></div>

            </figure>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="kesesuaian_2019"></div>

            </figure>
        </div>
    </div>

</div>


<script>
    Highcharts.chart('chart_2', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Persentase Kesesuaian Kompetensi dengan Bidang Pekerjaan',
            align: 'left'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Sangat Sesuai',
                y: {
                    {
                        $sangat_sesuai
                    }
                },
                sliced: true,
                selected: true
            }, {
                name: 'Sesuai',
                y: {
                    {
                        $sesuai
                    }
                }
            }, {
                name: 'Kurang Sesuai',
                y: {
                    {
                        $kurang_sesuai
                    }
                }
            }, {
                name: 'Tidak Sesuai',
                y: {
                    {
                        $tidak_sesuai
                    }
                }

            }]
        }]
    });

    // Data retrieved from https://netmarketshare.com


    Highcharts.chart('kesesuaian_2015', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kesesuaian Kompetensi dengan Bidang Pekerjaan Tahun Angkatan 2015',
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
                name: 'Sangat Sesuai',
                y: 9,
                sliced: true,
                selected: true
            }, {
                name: 'Sesuai',
                y: 13
            }, {
                name: 'Kurang Sesuai',
                y: 1
            }, {
                name: 'Tidak Sesuai',
                y: 1

            }]
        }]
    });

    Highcharts.chart('kesesuaian_2016', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kesesuaian Kompetensi dengan Bidang Pekerjaan Tahun Angkatan 2016',
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
                name: 'Sangat Sesuai',
                y: 17,
                sliced: true,
                selected: true
            }, {
                name: 'Sesuai',
                y: 28
            }, {
                name: 'Kurang Sesuai',
                y: 4
            }, {
                name: 'Tidak Sesuai',
                y: 0

            }]
        }]
    });

    Highcharts.chart('kesesuaian_2017', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kesesuaian Kompetensi dengan Bidang Pekerjaan Tahun Angkatan 2017',
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
                name: 'Sangat Sesuai',
                y: 12,
                sliced: true,
                selected: true
            }, {
                name: 'Sesuai',
                y: 20
            }, {
                name: 'Kurang Sesuai',
                y: 6
            }, {
                name: 'Tidak Sesuai',
                y: 0

            }]
        }]
    });

    Highcharts.chart('kesesuaian_2018', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kesesuaian Kompetensi dengan Bidang Pekerjaan Tahun Angkatan 2018',
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
                name: 'Sangat Sesuai',
                y: 7,
                sliced: true,
                selected: true
            }, {
                name: 'Sesuai',
                y: 11
            }, {
                name: 'Kurang Sesuai',
                y: 1
            }, {
                name: 'Tidak Sesuai',
                y: 0

            }]
        }]
    });

    Highcharts.chart('kesesuaian_2019', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kesesuaian Kompetensi dengan Bidang Pekerjaan Tahun Angkatan 2019',
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
                name: 'Sangat Sesuai',
                y: 5,
                sliced: true,
                selected: true
            }, {
                name: 'Sesuai',
                y: 11
            }, {
                name: 'Kurang Sesuai',
                y: 3
            }, {
                name: 'Tidak Sesuai',
                y: 0

            }]
        }]
    });
</script>
@endsection