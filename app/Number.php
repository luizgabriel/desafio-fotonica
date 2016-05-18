<?php

namespace Fotonica;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $fillable = [
      'value'
    ];

    protected $casts = [
      'value' => 'float'
    ];
}
