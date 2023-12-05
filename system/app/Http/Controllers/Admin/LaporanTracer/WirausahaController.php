<?php

namespace App\Http\Controllers\Admin\LaporanTracer;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\TracerStudy;
use Illuminate\Http\Request;

class WirausahaController extends Controller
{

    public function kesesuaian()
    {


        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['sangat_sesuai'] = TracerStudy::where('id_soal', '9725e720-94a3-4100-911b-cd481479a8e5')->count();
        $data['sesuai'] = TracerStudy::where('id_soal', '9725e739-636b-4d2a-8f5e-d853c9141fc1')->count();
        $data['kurang_sesuai'] = TracerStudy::where('id_soal', '9725e74d-57b0-4abb-807a-ce17597f05c3')->count();
        $data['tidak_sesuai'] = TracerStudy::where('id_soal', '9725e760-599a-4472-811a-4b424ccfa921')->count();

        $list_id_soal = [
            'Sangat Sesuai' => '9725e720-94a3-4100-911b-cd481479a8e5',
            'Sesuai' => '9725e739-636b-4d2a-8f5e-d853c9141fc1',
            'Kurang Sesuai' => '9725e74d-57b0-4abb-807a-ce17597f05c3',
            'Tidak Sesuai' => '9725e760-599a-4472-811a-4b424ccfa921'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');

        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.wirausaha.kesesuaian', $data);
    }

    public function masaTunggu()
    {


        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['langsung_bekerja'] = TracerStudy::where('id_soal', '9725e56b-06fb-4c95-ae0f-a1046a509ae5')->count();
        $data['kurang_dari_3_bulan'] = TracerStudy::where('id_soal', '9725e61b-2863-4477-b173-84712f232331')->count();
        $data['kurang_dari_6_bulan'] = TracerStudy::where('id_soal', '9725e630-9ccc-481b-904c-acb6d1ff5445')->count();
        $data['lebih_dari_6_bulan'] = TracerStudy::where('id_soal', '9725e64b-c3b6-40c8-b4f5-41421c793b3b')->count();

        $list_id_soal = [
            '0 Bulan / Langsung Bekerja / Dipesan Sebelum Lulus' => '9725e56b-06fb-4c95-ae0f-a1046a509ae5',
            'Waktu tunggu kurang dari 3 bulan' => '9725e61b-2863-4477-b173-84712f232331',
            'Waktu tunggu antara 3 - 6 bulan' => '9725e630-9ccc-481b-904c-acb6d1ff5445',
            'Waktu tunggu lebih dari 6 bulan' => '9725e64b-c3b6-40c8-b4f5-41421c793b3b'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');

        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.wirausaha.masa-tunggu', $data);
    }

    public function pendapatamPertama()
    {


        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['kurang_3'] = TracerStudy::where('id_soal', '9725e78a-447f-496d-bfbd-ad7cdd07cc57')->count();
        $data['lebih_3'] = TracerStudy::where('id_soal', '9725e7ad-8afe-4daa-aaf7-ec07988acb2f')->count();
        $data['lebih_5'] = TracerStudy::where('id_soal', '9725e7bd-33e3-44c9-9c0f-57c167e9a064')->count();

        $list_id_soal = [
            'Kurang dari 3 Juta' => '9725e78a-447f-496d-bfbd-ad7cdd07cc57',
            '3 Juta - 5 Juta' => '9725e7ad-8afe-4daa-aaf7-ec07988acb2f',
            'Lebih dari 5 Juta' => '9725e7bd-33e3-44c9-9c0f-57c167e9a064'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');

        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.wirausaha.pendapatan-pertama', $data);
    }

    public function posisiJabatan()
    {


        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['pemilik'] = TracerStudy::where('id_soal', '9725e6b0-2370-444a-8424-2413e12bbc25')->count();
        $data['staff'] = TracerStudy::where('id_soal', '9725e6cb-6940-492d-b696-c010563d3613')->count();
        $data['freelance'] = TracerStudy::where('id_soal', '9725e6e0-9039-4478-a8e8-cd42b68ef7d6')->count();

        $list_id_soal = [
            'Founder/Co-Founder (Pendiri/Pemilik)' => '9725e6b0-2370-444a-8424-2413e12bbc25',
            'Staff' => '9725e6cb-6940-492d-b696-c010563d3613',
            'Freelance/Kerja Lepas' => '9725e6e0-9039-4478-a8e8-cd42b68ef7d6'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');

        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.wirausaha.posisi-jabatan', $data);
    }
}
