<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'nullable|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'pvn' => 'nullable|string|max:50',
            'projectDescription' => 'nullable|string|max:2000',
        ]);

        try {
            $recipient = env('MAIL_TO_ADDRESS', 'danil.ushakov15@gmail.com');
            
            Mail::to($recipient)->send(new ContactRequest($validated));
            
            // Determine language based on referer
            $referer = $request->headers->get('referer');
            $isRu = $referer && str_contains($referer, '/ru');

            $message = $isRu 
                ? 'Ваш запрос успешно отправлен. Мы свяжемся с вами в ближайшее время.' 
                : 'Paldies! Jūsu pieprasījums ir nosūtīts.';

            return  redirect()->to(url()->previous() . '#contact')->with('success', $message);
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
            return back()->with('error', 'Kļūda sūtot ziņojumu. Lūdzu mēģiniet vēlāk vai sazinieties ar mums tieši.');
        }
    }
}
