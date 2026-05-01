<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected function casts(): array
    {
        return [

            'active' => 'boolean',
        ];
    }

}
