<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function serviceContactFrm(Request $request){
        
         try {
        $validatedData = $request->validate([
            'fullName' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'city'=> 'required',
            
            
        ]);

        $data = [
            'name' => $validatedData['fullName'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'messages' => $validatedData['message'],
            'city' => $validatedData['city'],
            'heading'=>'New Enquiry Form Submission',
           
        ];

         Mail::send('emails.contact', $data, function($message) use ($data){
         $message->from($data['email'],$data['name']); 
        //  $message->cc(['info@charteredone.com']);
        //  $message->to('info@charteredone.com')->subject('Enquiry');
         $message->to('neha@sociallabs.in')->subject('Enquiry');
        });

        // save data or send email
          return response()->json(['success' => 'Your message has been sent successfully! Our team will respond to you shortly','response'=>true]);
        } catch (Exception $ex) {
            // Debug via $ex->getMessage();
           return response()->json(['success' => 'Something went wrong!','response'=>false]);
        }  
    }

    public function sendContactfrm(Request $request)
    {
          try {
        // Validate form data
       $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:15',
            'message' => 'required',
        ]);
        $data = [
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'messages' => $validatedData['message'],
            'heading'=>'Contact Us'
        ];

        Mail::send('emails.contact', $data, function($message) use ($data){
         $message->from($data['email'],$data['name']); 
        //  $message->cc(['info@charteredone.com']);
        //  $message->to('info@charteredone.com')->subject('Enquiry');
         $message->to('neha@sociallabs.in')->subject('Contact us');
        });

        return response()->json(['success' => 'Form Submitted Successfully!','response'=>true]);
         } catch (Exception $ex) {
            // Debug via $ex->getMessage();
           return response()->json(['success' => 'Something went wrong!','response'=>false]);
        }  
    }
    
}
