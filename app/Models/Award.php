<?php

namespace App\Models;

use App\Http\Utilities\Utility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Award extends Model
{
    use HasFactory;
    const DIR_STORAGE = 'storage/awards/';
    const DIR_PUBLIC = 'awards/';

    protected $table = 'awards';

    protected $hidden = ['id'];

    protected $guarded = [];

    protected $casts = ['status'=>'boolean'];

    public function scopeActive($query) {
        return $query->where('status',Utility::ITEM_ACTIVE);
    } // TODO: check the how to use it.

    public function getShortDescriptionAttribute() {
        $truncatedText = Str::limit($this->description, Utility::TRUNCATE_COUNT);
        return strip_tags($truncatedText);
    }
}
