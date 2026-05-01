<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasMedia;

    protected $with = [
        'media',
    ];
    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [

            'active' => 'boolean',
        ];
    }

}
