<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSettings extends Model
{
    use HasFactory;
    public $table = 'menu_settings';
    public $timestamps = false;
}
