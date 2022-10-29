<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasFactory;
    protected $table = "client";

    protected $fillable = ['id','ClientBranch','ClientECode','ClientName','ClientGender','ClientDOB','ClientMobile','ClientAlterMobile','ClientPhoneNo','ClientEmail','ClientFatherName','ClientMotherName','ClientPermanentAddress','ClientResAddress','ClientSpouseName'];
}
