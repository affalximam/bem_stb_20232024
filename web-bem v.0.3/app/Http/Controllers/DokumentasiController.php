<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DokumentasiController extends Controller
{
    public function showDokumentasi() {
        $Dokumentasi = Dokumentasi::orderBy('waktu_dokumentasi', 'DESC')->get()->map(function($item) {
            $item->formatted_date = Carbon::parse($item->waktu_dokumentasi)->locale('id')->translatedFormat('l, j F Y');
            return $item;
        });
        
        return view('dokumentasi', compact('Dokumentasi'));
    }
    
    public function DetailDokumentasi($nama_dokumentasi) {
        $DetailDokumentasi = Dokumentasi::where('nama_dokumentasi', $nama_dokumentasi)->first();
        
        if (!$DetailDokumentasi) {
            return redirect('/dokumentasi')->with('error', 'Dokumentasi tidak ditemukan.');
        }
    
        $DetailDokumentasi->formatted_date = Carbon::parse($DetailDokumentasi->waktu_dokumentasi)->locale('id')->translatedFormat('l, j F Y');
        
        return view('dokumentasi-detail', compact('DetailDokumentasi'));
    }

    public function dokumentasi() {
        $Dokumentasi = Dokumentasi::orderBy('waktu_dokumentasi', 'DESC')->get()->map(function($item) {
            $item->formatted_date = Carbon::parse($item->waktu_dokumentasi)->locale('id')->translatedFormat('l, j F Y');
            return $item;
        })->toArray();
        return view('admin.dokumentasi', compact('Dokumentasi'));
    }

    public function dokumentasiEdit($id_dokumentasi) {
        $Dokumentasi = Dokumentasi::find($id_dokumentasi);
    
        if ($Dokumentasi) {
            
            $Dokumentasi->formatted_date = Carbon::parse($Dokumentasi->waktu_dokumentasi)
                                                  ->locale('id')
                                                  ->translatedFormat('l, j F Y');

            $tanggal = Carbon::parse($Dokumentasi->waktu_dokumentasi)->day;
            $bulan = Carbon::parse($Dokumentasi->waktu_dokumentasi)->month;
            $tahun = Carbon::parse($Dokumentasi->waktu_dokumentasi)->year;
            $jam = Carbon::parse($Dokumentasi->waktu_dokumentasi)->hour; 
            $menit = Carbon::parse($Dokumentasi->waktu_dokumentasi)->minute; 
    
            $bulanArray = [
                1 => 'Januari',
                2 => 'Februari',
                3 => 'Maret',
                4 => 'April',
                5 => 'Mei',
                6 => 'Juni',
                7 => 'Juli',
                8 => 'Agustus',
                9 => 'September',
                10 => 'Oktober',
                11 => 'November',
                12 => 'Desember',
            ];
            
        } else {
            return redirect()->route('admin.dokumentasi')->with('error', 'Dokumentasi not found');
        }
    
        return view('admin.dokumentasi-edit', compact('Dokumentasi', 'tanggal', 'bulan', 'tahun', 'jam', 'menit', 'bulanArray'));
    }

    public function updateDokumentasi(Request $request, $id_dokumentasi)
    {
        if ($request->has('save')) {
            $request->validate([
                'nama_dokumentasi' => 'required|string|max:255',
                'gambar_dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'deskripsi_dokumentasi' => 'required|string',
                'jam' => 'required|integer',
                'menit' => 'required|integer',
                'tanggal' => 'required|integer',
                'bulan' => 'required|integer',
                'tahun' => 'required|integer',
            ]);
    
            $dokumentasi = Dokumentasi::findOrFail($id_dokumentasi);
            $waktu = Carbon::create($request->tahun, $request->bulan, $request->tanggal, $request->jam, $request->menit, 0, 0);
            $dokumentasi->nama_dokumentasi = $request->nama_dokumentasi;
            $dokumentasi->deskripsi_dokumentasi = $request->deskripsi_dokumentasi;
            $dokumentasi->waktu_dokumentasi = $waktu;
            
    
            if ($request->hasFile('gambar_dokumentasi')) {
                
                $file = $request->file('gambar_dokumentasi');
                $destinationPath = 'asets/images/dokumentasi'; 
                $fileName = strtolower(str_replace(' ', '_', $request->input('nama_dokumentasi'))) . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path($destinationPath), $fileName);
                $dokumentasi->gambar_dokumentasi = '/' . $destinationPath . '/' . $fileName;
            }
    
            $dokumentasi->save();
            return back()->with('success', 'Dokumentasi berhasil diperbarui.');
        
        } elseif ($request->has('hapus')) {
            $dokumentasi = Dokumentasi::findOrFail($id_dokumentasi);
            $dokumentasi->delete();
            return redirect('/admin/dokumentasi')->with('success', 'Dokumentasi berhasil dihapus.');
        }
        return back()->withErrors('Tindakan tidak dikenali.');
    }

    public function dokumentasiAdd() {

        $bulanArray = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];
    
        return view('admin.dokumentasi-add', compact('bulanArray'));
    }

    public function addDokumentasi(Request $request)
    {
        $request->validate([
            'nama_dokumentasi' => 'required|string|max:255',
            'gambar_dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi_dokumentasi' => 'required|string',
            'jam' => 'required|integer',
            'menit' => 'required|integer',
            'tanggal' => 'required|integer',
            'bulan' => 'required|integer',
            'tahun' => 'required|integer',
        ]);

        // Membuat entri baru
        $dokumentasi = new Dokumentasi();
        $waktu = Carbon::create($request->tahun, $request->bulan, $request->tanggal, $request->jam, $request->menit, 0, 0);
        
        $dokumentasi->nama_dokumentasi = $request->nama_dokumentasi;
        $dokumentasi->deskripsi_dokumentasi = $request->deskripsi_dokumentasi;
        $dokumentasi->waktu_dokumentasi = $waktu;

        if ($request->hasFile('gambar_dokumentasi')) {
            $file = $request->file('gambar_dokumentasi');
            $destinationPath = 'asets/images/dokumentasi'; 
            $fileName = strtolower(str_replace(' ', '_', $request->input('nama_dokumentasi'))) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $fileName);
            $dokumentasi->gambar_dokumentasi = '/' . $destinationPath . '/' . $fileName;
        }

        $dokumentasi->save();
        return back()->with('success', 'Dokumentasi berhasil ditambahkan.');
    }

    public function deleteDokumentasi($id_dokumentasi)
    {
        $dokumentasi = Dokumentasi::findOrFail($id_dokumentasi);
        $dokumentasi->delete();
        return redirect('/admin/dokumentasi')->with('success', 'Dokumentasi berhasil dihapus.');
    }
    
    
}
