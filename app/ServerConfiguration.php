<?php

namespace Fotonica;

use Illuminate\Database\Eloquent\Model;

class ServerConfiguration extends Model
{
    protected $fillable = [
        'number_generator_status',
    ];

    protected $casts = [
        'number_generator_status' => 'bool',
    ];
}
