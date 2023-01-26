<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Mail;

class Contact extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'subject', 'message', 'attachment'];
    protected $hidden = ['id'];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "corporate.secretary@falga.co.id";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
