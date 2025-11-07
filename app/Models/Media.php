<?php

namespace App\Models;

use App\Http\Utilities\Utility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;
    const DIR_STORAGE = 'storage/medias/';
    const DIR_PUBLIC = 'medias/';

    protected $table = 'medias';

    protected $hidden = ['id'];

    protected $guarded = [];

    protected $casts = ['status'=>'boolean'];

    public function scopeActive($query) {
        return $query->where('status',Utility::ITEM_ACTIVE);
    } // TODO: check the how to use it.
}
