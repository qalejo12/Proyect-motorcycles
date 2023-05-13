<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductBike extends Model
{
    use HasFactory;

    use Sluggable;

    public function category()
    {
        return $this->belongsTo(CategoryBike::class);
    }

    protected $table = "products_bikes";


    protected $fillable = [
        'image',
        'name',
        'price',
        'status',
        'description',
        'category_id'
    ];

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }

    /**
     * @return string
     */
    public function getRouteKeyName(): string {
        return 'slug';
    }

}
