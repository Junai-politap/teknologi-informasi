@extends('template.admin')

@section('title', 'SIAKAD Teknologi Informasi - Admin')

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
                <div id="cmp_all"></div>
                
              </figure>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="cmp_2015"></div>
                
              </figure>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="cmp_2016"></div>
                
              </figure>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="cmp_2017"></div>
                
              </figure>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="cmp_2018"></div>
                
              </figure>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <figure class="highcharts">
                <div id="cmp_2019"></div>
                
              </figure>
        </div>
    </div>

</div>

<script>

Highcharts.chart('cmp_all', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bagaimana Anda Mencari Pekerjaan Setelah Lulus Dari Teknologi Informasi',
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
                name: 'Iklan di Koran/Majalah/Brosur',
                y: {{$iklan}},
                sliced: true,
                selected: true
            }, {
                name: 'Melamar Ke Perusahaan Tanpa Mengetahui Lowongan Yang Ada',
                y: {{$melamar}}
            }, {
                name: 'Saya Pergi Ke Bursa Kerja',
                y: {{$bursa}}
            }, {
                name: 'Saya Mencari Lewat Internet/Iklan Online/Milis',
                y: {{$internet}}
            
            },{
                name: 'Saya Dihubungi Oleh Staf Teknologi Informasi (Dosen, Admin, Dll)',
                y: {{$staff}}
            }, {
                name: 'Saya Membangun Network Sejak Saya Masih Kuliah',
                y: {{$network}}
            },{
                name: 'Relasi (Misal: Orangtua, Saudara, Teman, Dll)',
                y: {{$relasi}}
            }, {
                name: 'Saya Membangun Bisnis Sendiri',
                y: {{$bisnis}}
            }, {
                name: 'Lainnya (Sebutkan )',
                y: {{$lainnya_sebutkan}}
            }]
        }]
    });

    // Data retrieved from https://netmarketshare.com
    Highcharts.chart('cmp_2015', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bagaimana Anda Mencari Pekerjaan Setelah Lulus Dari Teknologi Informasi Tahun Angkatan 2015',
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
                name: 'Iklan di Koran/Majalah/Brosur',
                y: 1,
                sliced: true,
                selected: true
            }, {
                name: 'Melamar Ke Perusahaan Tanpa Mengetahui Lowongan Yang Ada',
                y: 4
            }, {
                name: 'Saya Pergi Ke Bursa Kerja',
                y: 0
            }, {
                name: 'Saya Mencari Lewat Internet/Iklan Online/Milis',
                y: 14
            
            },{
                name: 'Saya Dihubungi Oleh Staf Teknologi Informasi (Dosen, Admin, Dll)',
                y: 0
            }, {
                name: 'Saya Membangun Network Sejak Saya Masih Kuliah',
                y: 0
            },{
                name: 'Relasi (Misal: Orangtua, Saudara, Teman, Dll)',
                y: 5
            }, {
                name: 'Saya Membangun Bisnis Sendiri',
                y: 0
            }, {
                name: 'Lainnya (Sebutkan )',
                y: 0
            }]
        }]
    });

    Highcharts.chart('cmp_2016', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bagaimana Anda Mencari Pekerjaan Setelah Lulus Dari Teknologi Informasi Tahun Angkatan 2016',
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
                name: 'Iklan di Koran/Majalah/Brosur',
                y: 0,
                sliced: true,
                selected: true
            }, {
                name: 'Melamar Ke Perusahaan Tanpa Mengetahui Lowongan Yang Ada',
                y: 2
            }, {
                name: 'Saya Pergi Ke Bursa Kerja',
                y: 0
            }, {
                name: 'Saya Mencari Lewat Internet/Iklan Online/Milis',
                y: 26
            
            },{
                name: 'Saya Dihubungi Oleh Staf Teknologi Informasi (Dosen, Admin, Dll)',
                y: 2
            }, {
                name: 'Saya Membangun Network Sejak Saya Masih Kuliah',
                y: 6
            },{
                name: 'Relasi (Misal: Orangtua, Saudara, Teman, Dll)',
                y: 13
            }, {
                name: 'Saya Membangun Bisnis Sendiri',
                y: 0
            }, {
                name: 'Lainnya (Sebutkan )',
                y: 0
            }]
        }]
    });

    Highcharts.chart('cmp_2017', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bagaimana Anda Mencari Pekerjaan Setelah Lulus Dari Teknologi Informasi Tahun Angkatan 2017',
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
                name: 'Iklan di Koran/Majalah/Brosur',
                y: 0,
                sliced: true,
                selected: true
            }, {
                name: 'Melamar Ke Perusahaan Tanpa Mengetahui Lowongan Yang Ada',
                y: 2
            }, {
                name: 'Saya Pergi Ke Bursa Kerja',
                y: 1
            }, {
                name: 'Saya Mencari Lewat Internet/Iklan Online/Milis',
                y: 18
            
            },{
                name: 'Saya Dihubungi Oleh Staf Teknologi Informasi (Dosen, Admin, Dll)',
                y: 0
            }, {
                name: 'Saya Membangun Network Sejak Saya Masih Kuliah',
                y: 7
            },{
                name: 'Relasi (Misal: Orangtua, Saudara, Teman, Dll)',
                y: 8
            }, {
                name: 'Saya Membangun Bisnis Sendiri',
                y: 0
            }, {
                name: 'Lainnya (Sebutkan )',
                y: 0
            }]
        }]
    });

    Highcharts.chart('cmp_2018', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bagaimana Anda Mencari Pekerjaan Setelah Lulus Dari Teknologi Informasi Tahun Angkatan 2018',
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
                name: 'Iklan di Koran/Majalah/Brosur',
                y: 0,
                sliced: true,
                selected: true
            }, {
                name: 'Melamar Ke Perusahaan Tanpa Mengetahui Lowongan Yang Ada',
                y: 1
            }, {
                name: 'Saya Pergi Ke Bursa Kerja',
                y: 0
            }, {
                name: 'Saya Mencari Lewat Internet/Iklan Online/Milis',
                y: 7
            
            },{
                name: 'Saya Dihubungi Oleh Staf Teknologi Informasi (Dosen, Admin, Dll)',
                y: 0
            }, {
                name: 'Saya Membangun Network Sejak Saya Masih Kuliah',
                y: 4
            },{
                name: 'Relasi (Misal: Orangtua, Saudara, Teman, Dll)',
                y: 8
            }, {
                name: 'Saya Membangun Bisnis Sendiri',
                y:0
            }, {
                name: 'Lainnya (Sebutkan )',
                y: 1
            }]
        }]
    });

    Highcharts.chart('cmp_2019', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bagaimana Anda Mencari Pekerjaan Setelah Lulus Dari Teknologi Informasi Tahun Angkatan 2019',
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
                name: 'Iklan di Koran/Majalah/Brosur',
                y: 1,
                sliced: true,
                selected: true
            }, {
                name: 'Melamar Ke Perusahaan Tanpa Mengetahui Lowongan Yang Ada',
                y: 0
            }, {
                name: 'Saya Pergi Ke Bursa Kerja',
                y: 0
            }, {
                name: 'Saya Mencari Lewat Internet/Iklan Online/Milis',
                y: 6
            
            },{
                name: 'Saya Dihubungi Oleh Staf Teknologi Informasi (Dosen, Admin, Dll)',
                y: 0
            }, {
                name: 'Saya Membangun Network Sejak Saya Masih Kuliah',
                y: 1
            },{
                name: 'Relasi (Misal: Orangtua, Saudara, Teman, Dll)',
                y: 11
            }, {
                name: 'Saya Membangun Bisnis Sendiri',
                y: 0
            }, {
                name: 'Lainnya (Sebutkan )',
                y: 0
            }]
        }]
    });
</script>
@endsection