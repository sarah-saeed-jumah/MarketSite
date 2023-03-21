<?php

namespace App\Models;

use App\Mail\NewMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;


    public $fillable = [  'email','phone', 'message'];
    public static function boot() {

        parent::boot();
        static::created(function($item){
            $adminEmail = "sarahjumah6@gmail.com";
             Mail::to($adminEmail)->send(new  NewMail($item));
        });




}
}
