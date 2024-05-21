<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationInfo extends Model
{
    use HasFactory;
    public $table = 'notification_info';
    public $timestamps = false;
}
