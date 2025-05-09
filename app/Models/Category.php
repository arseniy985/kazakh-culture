<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image'
    ];

    /**
     * Получить все записи, принадлежащие к данной категории
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
    
    /**
     * Аксессор для получения полного URL изображения
     */
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }
        
        return asset('storage/' . $this->image);
    }
}
