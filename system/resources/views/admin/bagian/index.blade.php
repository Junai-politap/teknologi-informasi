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
                    <div id="container"></div>
                    
                  </figure>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <figure class="highcharts">
                    <div id="chart_2"></div>
                    
                  </figure>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-header">
            <h3 class="card-title"><strong> Data Bagian</strong></h3>

            <button class="btn btn-primary float-right" style="margin-left: 1%" data-toggle="modal"
                data-target="#modal-md"><span class="fa fa-plus"></span> Tambah Data</button>

            <a href="{{ url('admin/hasil-survey') }}" class="btn btn-success float-right"><span class="fa fa-industry"></span>
                Hasil Survey</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center"> Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_bagian as $bagian)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">

                                    {{-- <a href="{{ url("hasil-survey/$bagian->id") }}" class="btn btn-success"><span
                                            class="fa fa-industry"></span> Hasil Survey</a> --}}


                                    <a href="{{ url("admin/detail/$bagian->id") }}" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <button class="btn btn-warning" data-toggle="modal"
                                        data-target="#modal-edit{{ $bagian->id }}"><span class="fa fa-edit"></span>
                                        Edit</button>

                                    <div class="modal fade" id="modal-edit{{ $bagian->id }}">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form class="form-horizontal" action="{{ url('admin/update-form', $bagian->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama Bagian </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="nama" value="{{ $bagian->nama }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">
                                                                    Title
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="title" value="{{ $bagian->title }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal"><span class="fa fa-times"></span>
                                                            Close</button>
                                                        <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                            Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="{{ url("delete-form/$bagian->id") }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a> --}}

                                </div>
                            </td>
                            <td class="text-center" style="text-transform: capitalize">{{ $bagian->nama }}</td>
                            <td class="text-center" style="text-transform: capitalize">{{ $bagian->title }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-md">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('admin/store-form') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Bagian </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama " name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="fa fa-times"></span> Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Data retrieved from https://netmarketshare.com
        Highcharts.chart('container', {
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
            }]
        });


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
                    y: {{ $sangat_sesuai }},
                    sliced: true,
                    selected: true
                }, {
                    name: 'Sesuai',
                    y: {{ $sesuai }}
                }, {
                    name: 'Kurang Sesuai',
                    y: {{ $kurang_sesuai }}
                }, {
                    name: 'Tidak Sesuai',
                    y: {{ $tidak_sesuai }}
                
                }]
            }]
        });
    </script>
@endsection
