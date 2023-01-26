<?php

namespace App\Http\Controllers;
use \Exception;
use App\Models\Contact;

use Illuminate\Http\Request;
use App\Http\Resources\ContactResource;
use Illuminate\Http\Response;

class ContactController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'attachment' => 'nullable'
        ]);

        $input = $request->except('attachment');
        if($request->hasFile('attachment')) {
            $filenameWithExt = $request->file('attachment')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('attachment')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $attachmentPath = $request->file('attachment')->storeAs('ContactUs/attachments', $filenameSimpan);
            $input['attachment'] = $attachmentPath;
        }

        try {
            $contact = Contact::create($input);
            $content = array(
                'success' => true,
                'data' => $contact,
                'message' => "Message recorded"
            );
            return response()->json($content, 200);
        } catch(Exception $e) {
            $content = array(
                'success' => false,
                'data' => $e->getMessage(),
                'message' => "Message not recorded"
            );
            return response()->json($content, 500);
        }

    }
}
