<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{

    protected $table = "shares";

    protected $fillable = [
        'id',
        'share_name',
        'share_price',
        'shar_qty',
        'create_at',
        'update_at'
    ];
}
