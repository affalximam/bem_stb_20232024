<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiBem;
use App\Models\Dokumentasi;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class InformasiBemController extends Controller
{
    public function homeView()
    {
        $sambutanPresidenMahasiswa = InformasiBem::where('nama_informasi', 'Sambutan Presiden Mahasiswa')->first();
        $fotoPresma = InformasiBem::where('nama_informasi', 'Gambar Presiden Mahasiswa')->take(1)->first();
        $dokumentasiTerbaru = Dokumentasi::orderBy('id_dokumentasi', 'desc')->take(2)->get()->toArray();
        return view('index', compact('sambutanPresidenMahasiswa' , 'fotoPresma', 'dokumentasiTerbaru'));

    }

    public function visiMisi() 
    {
        $visi = InformasiBem::where('nama_informasi', 'VISI')->first();
        $misi = InformasiBem::where('nama_informasi', 'MISI')->first();
        return view('tentang-kami', compact('visi', 'misi'));
    }

    public function sambutan_presiden_mahasiswa() {
        $sambutanPresidenMahasiswa = InformasiBem::where('nama_informasi', 'Sambutan Presiden Mahasiswa')->first();
        return view('admin.sambutan-presiden-mahasiswa', compact('sambutanPresidenMahasiswa'));
    }

    public function updateSambutanPresidenMahasiswa(Request $request)
    {
        $request->validate([
            'sambutan_presiden_mahasiswa' => 'required|string',
        ]);

        InformasiBem::where('nama_informasi', 'Sambutan Presiden Mahasiswa')->update([
            'isi_informasi' => $request->input('sambutan_presiden_mahasiswa'),
        ]);

        return redirect()->route('admin.sambutan_presiden')->with('success', 'Sambutan Presiden Mahasiswa updated successfully.');
    }

    public function updateFotoPresidenMahasiswa(Request $request)
    {
        $request->validate([
            'isi_informasi' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('isi_informasi')) {
            $file = $request->file('isi_informasi');
            $filename = time() . '_' . $file->getClientOriginalName(); 
            
            
            $path = $file->move(public_path('asets/images/informasi-bem'), $filename);

            
            InformasiBem::where('nama_informasi', 'Gambar Presiden Mahasiswa')->update([
                'isi_informasi' => 'asets/images/informasi-bem/' . $filename, 
            ]);
        }

        return redirect()->route('admin.sambutan_presiden')->with('success', 'Foto Presiden Mahasiswa updated successfully.');
    }


    public function visi_misi() {
        $visi = InformasiBem::where('nama_informasi', 'VISI')->first();
        $misi = InformasiBem::where('nama_informasi', 'MISI')->first();
        return view('admin.visi-misi', compact('visi', 'misi'));
    }

    public function update_visi_misi(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        InformasiBem::where('nama_informasi', 'visi')->update([
            'isi_informasi' => $request->input('visi'),
        ]);
        InformasiBem::where('nama_informasi', 'misi')->update([
            'isi_informasi' => $request->input('misi'),
        ]);
        return redirect()->route('admin.visi_misi')->with('success', 'VISI MISI updated successfully.');

    }
}