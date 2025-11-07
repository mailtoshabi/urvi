<?php

namespace App\Models;

use App\Http\Utilities\Utility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    const DIR_STORAGE = 'storage/projects/';
    const DIR_PUBLIC = 'projects/';

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
