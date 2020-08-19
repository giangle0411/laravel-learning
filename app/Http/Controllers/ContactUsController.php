<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $pages = Page::All();
        return view('contact', ['pages' => $pages]);
    }

    public function sendMessage(Request $request)
    {
        $pages = Page::All();

        $input = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Mail::send('mails.contactus', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function ($message) {
        //     $message->from('no-reply@giang.com', 'Giang Website');
        //     $message->to('teeeejayyyyy0411@gmail.com');
        // });
        dd($input);

        return view('contact', ['pages' => $pages])->with('successMessage', 'Thank you! Your message has been sent!');
    }

    public function sendMessageAjax(Request $request)
    {
        $input = $request->All();

        dd($input);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        return [
            'success' => true,
            'confirmMessage' => 'Thank you, your message has been sent. We will reach back as soon as we can'
        ];
    }
}
