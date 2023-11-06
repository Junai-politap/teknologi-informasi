@extends('template.home')
@section('title', 'Profil Pimpinan Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Profil Pimpinan',
    ])
    @include('section.menu')
    <br><br><br>
    <div class="site-section site-blocks-cover">
        <div class="container">
            <div class="row">
                @foreach ($list_pimpinan as $pimpinan)
                    <div class="container">
                        @if ($pimpinan->jabatan == 'Ketua Jurusan')
                        <div class="row mb-5">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <img src="{{ url("public/$pimpinan->foto") }}" alt="Image"
                                    class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 ml-auto ">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pimpinan->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nama_lengkap }}, {{ $pimpinan->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->tempat_lahir }}, {{ $pimpinan->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif

                        @if ($pimpinan->jabatan == 'Sekretaris Jurusan')
                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                <img src="{{ url("public/$pimpinan->foto") }}" 
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pimpinan->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nama_lengkap }}, {{ $pimpinan->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->tempat_lahir }}, {{ $pimpinan->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif

                        @if ($pimpinan->jabatan == 'Koordinator Prodi')
                        <div class="row mb-5">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <img src="{{ url("public/$pimpinan->foto") }}"
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 ml-auto align-self-center">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pimpinan->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nama_lengkap }}, {{ $pimpinan->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->tempat_lahir }}, {{ $pimpinan->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif

                        @if ($pimpinan->jabatan == 'Ketua Laboratotium')
                        <div class="row  mb-5">
                            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                <img src="{{ url("public/$pimpinan->foto") }}"
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                                <h2 class="section-title-underline mb-5">
                                    <span>{{ $pimpinan->jabatan }}</span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nama_lengkap }}, {{ $pimpinan->gelar_belakang }} </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top">{{ $pimpinan->tempat_lahir }}, {{ $pimpinan->tanggal_lahir }}</td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@push('style')
    <style>
        .v-align-top {
            vertical-align: top;
        }
    </style>
@endpush
