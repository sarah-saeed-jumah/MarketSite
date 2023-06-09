<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function sendEmail( Request $req) {
       $data=[
              'email'=>$req->email,
              'message'=>$req->message
       ];
       dd($data);
    }
}
