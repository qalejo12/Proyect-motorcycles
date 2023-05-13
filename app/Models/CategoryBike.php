<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class CategoryBike extends Model
{
    use HasFactory;

    use Sluggable;

    protected $table = "categories_bikes";

    public function bikes()
    {
        // return $this->hasMany(ProductBike::class);
        return $this->hasMany(ProductBike::class, 'category_id');
    }

    protected $fillable = [
        'name',
        'description',
        'priority'
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
