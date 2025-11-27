<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Jobs\SendMailJob;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('emails.kirim-email');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $data = $request->all();
        
        // Dispatch job ke queue
        dispatch(new SendMailJob($data));
        
        return redirect()->route('kirim.email')->with('status', 'Email berhasil dikirim!');
    }
}
