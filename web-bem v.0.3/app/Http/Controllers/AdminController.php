<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.index');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Mengakhiri sesi pengguna
        
        // Menghapus session dan regenerasi untuk keamanan tambahan
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/'); // Arahkan ke halaman index setelah logout
    }

    public function index()
    {
        return view('admin.index');
    }

    public function setting()
    {
        $User =  User::where('id', Auth::user()->id)->first();
        return view('admin.setting', compact('User'));
    }

    public function updateSetting(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'old_password' => 'required_with:new_password|nullable|string', // Hanya diperlukan jika password baru diisi
            'new_password' => 'nullable|string|min:8|confirmed', // Harus minimal 8 karakter dan harus dikonfirmasi
        ]);

        // Ambil user yang sedang login
        $user = Auth::user();
        
        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password jika diisi
        if (!empty($request->new_password)) {
            // Cek password lama
            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
            } else {
                return back()->withErrors(['old_password' => 'Password lama tidak valid.']);
            }
        }

        // Simpan perubahan ke database
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.setting')->with('success', 'Pengaturan berhasil diperbarui.');
    }

    
}
