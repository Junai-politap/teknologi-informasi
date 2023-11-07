<?php

namespace App\Http\Controllers\Admin\LaporanTracer;

use App\Http\Controllers\Controller;
use App\Models\TracerStudy;
use Illuminate\Http\Request;

class BekerjaController extends Controller
{
    public function caraMendapatkanPekerjaan()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();
        
        $data['iklan'] = TracerStudy::where('id_soal', '97256e02-de05-49d0-89e6-c32eb72d9474')->count();
        $data['melamar'] = TracerStudy::where('id_soal', '97256e9d-8868-46e5-b502-9254f1efe87f')->count();
        $data['bursa'] = TracerStudy::where('id_soal', '97256ea7-7c3f-42ec-8fc3-b8c531cf81e5')->count();
        $data['internet'] = TracerStudy::where('id_soal', '97256eb2-69bb-4a16-a211-fe548e01c32c')->count();
        $data['staff'] = TracerStudy::where('id_soal', '97256ebd-b536-4eab-a866-73f3ae16e1f7')->count();
        $data['network'] = TracerStudy::where('id_soal', '97256ec9-040d-451d-8ba2-e9a511ae98fa')->count();
        $data['relasi'] = TracerStudy::where('id_soal', '97256ed7-a6ba-47dc-bead-554546ada5a3')->count();
        $data['bisnis'] = TracerStudy::where('id_soal', '97256ee3-8e95-40a8-97be-0b4f4ab896c1')->count();
        $data['lainnya_sebutkan'] = TracerStudy::where('id_soal', '97256f87-7430-4912-aacc-7840f24aa403')->count();

        return view('admin.laporan-tracer.bekerja.cara-mendapatkan-pekerjaan', $data);
    }

    public function jenisPekerjaan()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['pns'] = TracerStudy::where('id_soal', '97256fba-32c2-4c86-be02-269f7f35b871')->count();
        $data['swasta'] = TracerStudy::where('id_soal', '97256fcb-4f8c-4887-85d5-1637297a3256')->count();
        $data['yang_lain'] = TracerStudy::where('id_soal', '97256fe0-d91d-4796-9c50-0231c1f401bd')->count();
     
        return view('admin.laporan-tracer.bekerja.jenis-pekerjaan', $data);
    }
    
    public function kategoriPekerjaan()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['bumn'] = TracerStudy::where('id_soal', '97257063-6fd6-4e73-ac4e-d0114a1e0cf1')->count();
        $data['lokal'] = TracerStudy::where('id_soal', '97257072-ffcc-4c90-8f9f-e891e2ae4013')->count();
        $data['nasional'] = TracerStudy::where('id_soal', '97257082-0f6f-48e8-806f-751612acc6b6')->count();
        $data['multi'] = TracerStudy::where('id_soal', '972570ab-f013-4339-9094-6836c877aaf1')->count();

        return view('admin.laporan-tracer.bekerja.kategori-pekerjaan', $data);
    }
    public function kesesuaian()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['sangat_sesuai'] = TracerStudy::where('id_soal', '9725e258-9f99-4af4-ba22-30322fc6ff18')->count();
        $data['sesuai'] = TracerStudy::where('id_soal', '9725e2e6-f65a-4d50-a48c-b9fee7b4a061')->count();
        $data['kurang_sesuai'] = TracerStudy::where('id_soal', '9725e300-314b-404e-8c31-30412f5afbb1')->count();
        $data['tidak_sesuai'] = TracerStudy::where('id_soal', '9725e318-1e49-4f2a-af14-e16f38d1d74c')->count();

        return view('admin.laporan-tracer.bekerja.kesesuaian', $data);
    }
    public function masaTunggu()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['langsung_bekerja'] = TracerStudy::where('id_soal', '97257280-4e0d-4e4b-8a1b-ea0aa0944284')->count();
        $data['kurang_dari_3_bulan'] = TracerStudy::where('id_soal', '972572b3-34c4-43cf-b61b-8183ec4c470a')->count();
        $data['kurang_dari_6_bulan'] = TracerStudy::where('id_soal', '972572c2-130a-4329-83aa-2cbea0014bc8')->count();
        $data['lebih_dari_6_bulan'] = TracerStudy::where('id_soal', '972572d3-0011-48d7-8b8d-a8f1c3f7e0e0')->count();

        return view('admin.laporan-tracer.bekerja.masa-tunggu', $data);
    }

    public function pendapatamPertama()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();

        $data['kurang_3'] = TracerStudy::where('id_soal', '9725e36c-3bcf-4791-862e-4a3224947fe3')->count();
        $data['lebih_3'] = TracerStudy::where('id_soal', '9725e380-c739-4ad1-a95e-6994a2bfef23')->count();
        $data['lebih_5'] = TracerStudy::where('id_soal', '9725e398-4cb3-4a3c-a92e-72b4c982dd33')->count();

        return view('admin.laporan-tracer.bekerja.pendapatan-pertama', $data);
    }

}
