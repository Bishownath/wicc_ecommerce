<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'vendor_id',
        'tag_id',
        'name',
        'slug',
        'description',
        'quantity',
        'price',
        'old_price',
        'status',  //available or not available
    ];

    public static function boot()
    {
        parent::boot();
        static::created(function ($product) {
            $product->update(['slug' => $product->name]);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
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

    // public function setStatusAttribute($status)
    // {
    //     return $status ==  1 ? 'Available' : 'Unavailable';
    // }


    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function vendors()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
