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
            'message' => 'required'
        ]);

        try{
            $contact = Contact::create($request->all());

            $content = array(
                'success' => true,
                'data' => $request->all(),
                'message' => "Message recorded"
            );
            return response()->json($content, 200);
        }
        catch(Exception $e){
            $content = array(
                'success' => false,
                'data' => $e->getMessage(),
                'message' => "Message not recorded"
            );

            return response()->json($content, 500);
        }

    }
}
