<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Support extends Model
{
    //

    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
