<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Departemen;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StrukturOrganisasiController extends Controller
{
    public function strukturOrganisasi()
    {
        $Presma = StrukturOrganisasi::where('posisi_anggota', 'PRESIDEN MAHASISWA')->first();
        $WaPresma = StrukturOrganisasi::where('posisi_anggota', 'WAKIL PRESIDEN MAHASISWA')->first();
        $Sekretaris = StrukturOrganisasi::where('posisi_anggota', 'SEKRETARIS')->get()->toArray();
        $Bendahara = StrukturOrganisasi::where('posisi_anggota', 'BENDAHARA')->get()->toArray();
        
        $MenteriPsdm = StrukturOrganisasi::where('posisi_anggota', 'PENGEMBANGAN SUMBER DAYA MANUSIA')
                                        ->where('jabatan_anggota', 'MENTERI PSDM')
                                        ->first();
        $AnggotaPsdm = StrukturOrganisasi::where('posisi_anggota', 'PENGEMBANGAN SUMBER DAYA MANUSIA')
                                        ->where('jabatan_anggota', '<>', 'MENTERI PSDM')
                                        ->get()->toArray();

        $MenteriLsm = StrukturOrganisasi::where('posisi_anggota', 'LEMBAGA SOSIAL MASYARAKAT')
                                        ->where('jabatan_anggota', 'MENTERI LSM')
                                        ->first();
        $AnggotaLsm = StrukturOrganisasi::where('posisi_anggota', 'LEMBAGA SOSIAL MASYARAKAT')
                                        ->where('jabatan_anggota', '<>', 'MENTERI LSM')
                                        ->get()->toArray();

        $MenteriKominfo = StrukturOrganisasi::where('posisi_anggota', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI')
                                        ->where('jabatan_anggota', 'MENTERI KOMINFO')
                                        ->first();
        $AnggotaKominfo = StrukturOrganisasi::where('posisi_anggota', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI')
                                        ->where('jabatan_anggota', '<>', 'MENTERI KOMINFO')
                                        ->get()->toArray();
        
        $MenteriSenbora = StrukturOrganisasi::where('posisi_anggota', 'SENI BUDAYA DAN OLAHRAGA')
                                        ->where('jabatan_anggota', 'MENTERI SENBORA')
                                        ->first();
        $AnggotaSenbora = StrukturOrganisasi::where('posisi_anggota', 'SENI BUDAYA DAN OLAHRAGA')
                                        ->where('jabatan_anggota', '<>', 'MENTERI SENBORA')
                                        ->get()->toArray();

        $MenteriKemenlu = StrukturOrganisasi::where('posisi_anggota', 'KEMENTRIAN LUAR NEGERI')
                                        ->where('jabatan_anggota', 'MENTERI KEMENLU')
                                        ->first();
        $AnggotaKemenlu = StrukturOrganisasi::where('posisi_anggota', 'KEMENTRIAN LUAR NEGERI')
                                        ->where('jabatan_anggota', '<>', 'MENTERI KEMENLU')
                                        ->get()->toArray();
        
        return view('struktur-organisasi', 
        compact(
            'Presma',
            'WaPresma',
            'Sekretaris',
            'Bendahara',
            'MenteriPsdm',
            'AnggotaPsdm',
            'MenteriLsm',
            'AnggotaLsm',
            'MenteriKominfo',
            'AnggotaKominfo',
            'MenteriSenbora',
            'AnggotaSenbora',
            'MenteriKemenlu',
            'AnggotaKemenlu',
        ));
    }
    
    public function DetailAnggotas($nama_anggota) {
        $DetailAnggota = StrukturOrganisasi::where('nama_anggota', $nama_anggota)->first();
    
        if (!$DetailAnggota) {
            return redirect('/struktur-organisasi')->with('error', 'Anggota tidak ditemukan.');
        }
    
        return view('anggota', compact('DetailAnggota'));
    }

    public function anggota() {
        $Presma = StrukturOrganisasi::where('posisi_anggota', 'PRESIDEN MAHASISWA')->first();
        $WaPresma = StrukturOrganisasi::where('posisi_anggota', 'WAKIL PRESIDEN MAHASISWA')->first();
        $Sekretaris = StrukturOrganisasi::where('posisi_anggota', 'SEKRETARIS')->get()->toArray();
        $Bendahara = StrukturOrganisasi::where('posisi_anggota', 'BENDAHARA')->get()->toArray();
        
        $AnggotaPsdm = StrukturOrganisasi::where('posisi_anggota', 'PENGEMBANGAN SUMBER DAYA MANUSIA')
                                        ->get()->toArray();

        $AnggotaLsm = StrukturOrganisasi::where('posisi_anggota', 'LEMBAGA SOSIAL MASYARAKAT')
                                        ->get()->toArray();

        $AnggotaKominfo = StrukturOrganisasi::where('posisi_anggota', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI')
                                        ->get()->toArray();
        
        $AnggotaSenbora = StrukturOrganisasi::where('posisi_anggota', 'SENI BUDAYA DAN OLAHRAGA')
                                        ->get()->toArray();

        $AnggotaKemenlu = StrukturOrganisasi::where('posisi_anggota', 'KEMENTRIAN LUAR NEGERI')
                                        ->get()->toArray();
        
        return view('admin.anggota', 
        compact(
            'Presma',
            'WaPresma',
            'Sekretaris',
            'Bendahara',
            'AnggotaPsdm',
            'AnggotaLsm',
            'AnggotaKominfo',
            'AnggotaSenbora',
            'AnggotaKemenlu',
        ));
    }

    public function updateAnggota(Request $request, $id_anggota)
    {
        
        $request->validate([
            'jabatan_anggota' => 'required|string|max:255',
            'nama_anggota' => 'required|string|max:255',
            'posisi_anggota' => 'required|string|max:255',
            'jurusan_anggota' => 'required|string|max:255',
            'angkatan_anggota' => 'required|integer',
            'gambar_anggota' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);
    
        $anggota = StrukturOrganisasi::where('id_anggota', $id_anggota)->firstOrFail();
    
        $anggota->jabatan_anggota = $request->jabatan_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->posisi_anggota = $request->posisi_anggota;
        $anggota->jurusan_anggota = $request->jurusan_anggota;
        $anggota->angkatan_anggota = $request->angkatan_anggota;
    
        if ($request->hasFile('gambar_anggota')) {
            if ($anggota->gambar_anggota) {
                $previousFilePath = public_path($anggota->gambar_anggota);

                
                if (file_exists($previousFilePath)) {
                    unlink($previousFilePath);
                }
            }
            
            $file = $request->file('gambar_anggota');
            $destinationPath = 'asets/images/anggota'; 
            $fileName = strtolower(str_replace(' ', '_', $request->input('nama_anggota'))) . '_' . time() . '.' . $file->getClientOriginalExtension();
            
            
            $file->move(public_path($destinationPath), $fileName);

            
            $anggota->gambar_anggota = '/' . $destinationPath . '/' . $fileName;
        }
        $anggota->save();
    
        return redirect()->route('admin.anggota')->with('success', 'Data anggota berhasil diperbarui.');
    }
    
    public function anggota_add() {
        $Departemen = Departemen::where('nama_departemen', '!=' ,'BADAN EKSEKUTIF MAHASISWA')->get()->toArray();
        return view('admin.anggota-add', compact('Departemen'));
    }

    public function add_anggota(Request $request)
    {
        
        $request->validate([
            'gambar_anggota' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
            'posisi_anggota' => 'required|string',
            'jabatan_anggota' => 'required|string',
            'nama_anggota' => 'required|string',
            'jurusan_anggota' => 'required|string',
            'angkatan_anggota' => 'required|integer',
        ]);

        
        $anggota = new StrukturOrganisasi();

        
        if ($request->hasFile('gambar_anggota')) {
            
            $file = $request->file('gambar_anggota');
            $destinationPath = 'asets/images/anggota'; 
            $fileName = strtolower(str_replace(' ', '_', $request->input('nama_anggota'))) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $fileName);
            $anggota->gambar_anggota = '/' . $destinationPath . '/' . $fileName;
        }

        $anggota->posisi_anggota = $request->input('posisi_anggota');
        $anggota->jabatan_anggota = $request->input('jabatan_anggota');
        $anggota->nama_anggota = $request->input('nama_anggota');
        $anggota->jurusan_anggota = $request->input('jurusan_anggota');
        $anggota->angkatan_anggota = $request->input('angkatan_anggota');
        $anggota->save();
        return redirect()->route('admin.anggota.add')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function deleteAnggota($id_anggota)
    {
        $anggota = StrukturOrganisasi::where('id_anggota', $id_anggota)->firstOrFail();

        if ($anggota->gambar_anggota) {
            $filePath = public_path($anggota->gambar_anggota);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $anggota->delete();

        return redirect()->route('admin.anggota')->with('success', 'Data anggota berhasil dihapus.');
    }
    
}
