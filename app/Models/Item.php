<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Item extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id'
    ];

    /**
     * Получить категорию, к которой принадлежит данная запись
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
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
