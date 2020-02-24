<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Mail\NormalRequest;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ProcessEmail;

class PageController extends Controller
{ 
    /**
     * GET
     */  
    public function normalRequest(Request $request){
    	return view('normal-request');
    }

    public function queuedRequest(Request $request){
    	return view('queued-request');
    }

    /**
     * POST
     */  
    public function sendingNormalRequest(Request $request){ 
        
        $arr = array_merge(
            $request->all(),
            [
                'request_type' => 'normal'
            ]
        );
 
        Mail::to($request->email) 
        ->send(new NormalRequest($arr)); 

        $t = microtime(true) - LARAVEL_START;
        $request->session()->flash('response_time', $t); 
        return back()->with('success', 'Successfully Sent');
    }

    public function sendingQueuedRequest(Request $request){ 
        
        $arr = array_merge(
            $request->all(),
            [
                'request_type' => 'queue'
            ]
        );
  
        ProcessEmail::dispatch($arr);

        $t = microtime(true) - LARAVEL_START;
        $request->session()->flash('response_time', $t); 
        return back()->with('success', 'Successfully Sent');
    }
}
