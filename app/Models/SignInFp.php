<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignInFp extends Model
{
    use HasFactory;
    public $table = 'sign_in_forgot_password';
    public $timestamps = false;
}
