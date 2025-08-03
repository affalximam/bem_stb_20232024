<?php

namespace App\Http\Controllers;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DepartemenController extends Controller
{
    public function showDepartement() {
        $Departemen = Departemen::get()->toArray();
        return view('program-kerja', compact('Departemen'));
    }
    
    public function DetailProker($departemen) {
        $DetailProker = Departemen::where('departemen', $departemen)->first();
    
        if (!$DetailProker) {
            return redirect('/program-kerja')->with('error', 'Program kerja tidak ditemukan.');
        }
    
        return view('program-kerja-detail', compact('DetailProker'));
    }

    public function departemen() {
        $Departemen = Departemen::where('nama_departemen', '!=' ,'BADAN EKSEKUTIF MAHASISWA')->get()->toArray();
        return view('admin.departemen', compact('Departemen'));
    }

    public function departemen_edit($id_departemen)
    {
        $Departemen = Departemen::where('nama_departemen', '!=', 'BADAN EKSEKUTIF MAHASISWA')
            ->where('id_departemen', $id_departemen)
            ->first();

        if (!$Departemen) {
            return redirect('/admin/departemen'); 
        }

        return view('admin.departemen-edit', compact('Departemen'));
    }

    public function proker_bem_edit()
    {
        $prokerBem = Departemen::where('nama_departemen', 'BADAN EKSEKUTIF MAHASISWA')
            ->first();

        if (!$prokerBem) {
            return redirect('/admin'); 
        }

        return view('admin.proker-bem', compact('prokerBem'));
    }

    // Controller
public function update_proker_bem(Request $request)
{
    $request->validate([
        'program_kerja_departemen' => 'required|string',
        'gambar_departemen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
    ]);

    $prokerBem = Departemen::where('nama_departemen', 'BADAN EKSEKUTIF MAHASISWA')->first();

    if (!$prokerBem) {
        return redirect()->route('admin.departemen')->withErrors(['error' => 'Departemen tidak ditemukan.']);
    }

    $data = [
        'proker_departemen' => $request->input('program_kerja_departemen'),
    ];

    if ($request->hasFile('gambar_departemen')) {
        if ($prokerBem->gambar_departemen) {
            $oldImagePath = public_path('asets/images/departemen') . '/' . basename($prokerBem->gambar_departemen);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $imageName = time() . '_' . $request->file('gambar_departemen')->getClientOriginalName();
        $destinationPath = public_path('asets/images/departemen'); 
        $request->file('gambar_departemen')->move($destinationPath, $imageName);
        $data['gambar_departemen'] = '/asets/images/departemen/' . $imageName; 
    }

    $prokerBem->update($data);

    return redirect('/admin/proker-bem')->with('success', 'Departemen updated successfully.');
}



    public function update_departemen(Request $request, $id_departemen)
    {
        $request->validate([
            'nama_departemen' => 'required|string',
            'program_kerja_departemen' => 'required|string',
        ]);

        
        $departemen = Departemen::findOrFail($id_departemen);
        
        $data = [
            'nama_departemen' => $request->input('nama_departemen'),
            'proker_departemen' => $request->input('program_kerja_departemen'),
        ];

        
        if ($request->hasFile('gambar_departemen')) {
            
            if ($departemen->gambar_departemen) {
                $oldImagePath = public_path('asets/images/departemen') . '/' . basename($departemen->gambar_departemen);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            
            $imageName = time() . '_' . $request->file('gambar_departemen')->getClientOriginalName();
            $destinationPath = public_path('asets/images/departemen'); 
            $request->file('gambar_departemen')->move($destinationPath, $imageName);
            $data['gambar_departemen'] = '/asets/images/departemen/' . $imageName; 
        }

        
        $departemen->update($data);

        return redirect()->route('admin.departemen', $id_departemen)->with('success', 'Departemen updated successfully.');
    }


    public function departemen_add()
    {
        return view('admin.departemen-add');
    }

    public function add_departemen(Request $request)
    {
        $request->validate([
            'nama_departemen' => 'required|string',
            'departemen' => 'required|string',
            'proker_departemen' => 'required|string',
            'gambar_departemen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = [
            'departemen' => $request->input('departemen'),
            'nama_departemen' => $request->input('nama_departemen'),
            'proker_departemen' => $request->input('proker_departemen')
        ];

        if ($request->hasFile('gambar_departemen')) {
            $data['gambar_departemen'] = $request->file('gambar_departemen')->storeAs(
                'asets/images/departemen', 
                $request->file('gambar_departemen')->getClientOriginalName(), 
                'public'
            );
        }

        Departemen::create($data);

        return redirect()->route('admin.add_departemen_form')->with('success', 'Departemen berhasil ditambahkan.');
    }
    
}