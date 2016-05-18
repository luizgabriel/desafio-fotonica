<?php

namespace Fotonica;

use Illuminate\Database\Eloquent\Model;

class ServerConfiguration extends Model
{
    protected $table = 'server_configurations';
    protected $fillable = [
        'number_generator_status',
    ];

    protected $casts = [
        'number_generator_status' => 'integer',
    ];
}
