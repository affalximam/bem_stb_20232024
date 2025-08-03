<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ContactController extends Controller
{
    public function addMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Menyimpan data kontak ke database
        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function showContactResponse() {

        $Contact = Contact::orderBy('created_at', 'DESC')->get()->map(function($item) {
            $item->formatted_date = Carbon::parse($item->created_at)->locale('id')->translatedFormat('l, j F Y');
            return $item;
        });
        return view('admin.contact',  compact('Contact'));
    }

    
}
