<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    /**
     * Boot The Post Modal
     */
    public static function boot()
    {
        parent::boot();

        static::created(function ($category) {
            $category->update(['slug' => $category->name]);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function setSlugAttribute($name)
    {
        $slug = Str::slug($name);
        // $this->attributes['name'] = $name;
        if (static::whereSlug($slug)->exists()) {
            $slug = "{$slug}-{$this->id}";
        }
        $this->attributes['slug'] = $slug;
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
