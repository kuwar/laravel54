<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    //
    protected $fillable = ['title', 'body', 'created_at', 'updated_at'];

    protected $table = "push_notifications";
}
