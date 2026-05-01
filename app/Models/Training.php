<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Training extends Model
{
    use HasMedia;
    protected $with = [
        'media',
    ];
    protected $guarded = ['id'];

    protected $table = 'training'; // أو اسم الجدول عندك    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [

            'active' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
