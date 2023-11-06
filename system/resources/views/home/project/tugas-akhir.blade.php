@extends('template.home')
@section('title', 'PBL - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Tugas Akhir Mahasiswa',
    ])
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                @foreach ($list_tahun->groupBy('tahun_angkatan') as $tahun_angkatan => $val)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                            href="#tahun_angkatan-{{ $tahun_angkatan }}" role="tab">Tahun {{ $tahun_angkatan }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($list_tugas_akhir->groupBy('tahun_angkatan') as $tahun_angkatan => $list_tugas_akhir)
                    <div class="tab-pane fade show active" id="tahun_angkatan-{{ $tahun_angkatan }}" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-5">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center"> Nama Mahasiswa</th>
                                        <th class="text-center"> Judul Tugas Akhir</th>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($list_tugas_akhir as $tugas_akhir)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-left" style="text-transform: capitalize">{{ $tugas_akhir->nama_mahasiswa }}</td>
                                                <td class="text-justify" style="text-transform: uppercase;">{{ $tugas_akhir->judul }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>

@endsection
