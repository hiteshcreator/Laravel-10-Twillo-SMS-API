<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;
use Twilio\Rest\Client;

class twilloController extends Controller
{
    public $account_sid;
    public $auth_token;
    public $twilio_number;
    
    public function __construct(){
        $this->account_sid = env("TWILIO_SID");
        $this->auth_token  = env("TWILIO_TOKEN");
        $this->twilio_number  = env("TWILIO_FROM");
    }

    // ***  index function for sending message ***
    public function index(Request $req){
        $code ="+91";
        // default set you number for example +91123456789
        $receiverNumber = "***********";

        if($req->number){
            $receiverNumber = $code.$req->number;
        }
        
        $message = "First Message send with twillo SMS API created by hitesh";

        try {
            $client = new Client($this->account_sid, $this->auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $this->twilio_number, 
                'body' => $message]);

            if($req->isMethod('get') && !$req->isMethod('post')){
                return response()->json([ 'status' => '200','message'=>$message]);
            }

            return view('sms')->with('success','SMS Sent Successfully.');
  
        } catch (Exception $e) {
            if($req->isMethod('get') && !$req->isMethod('post')){
                return response()->json([ 'status' => '401','message'=>$e->getMessage()]);
            }

            return view('sms')->with('success',$e->getMessage());
        }
    }
}
