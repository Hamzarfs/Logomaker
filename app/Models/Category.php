<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name', 'slug', 'meta_title', 'meta_desc', 'content', 'is_top', 'heading'
    // ];

    protected $guarded = [];
    // protected $appends = ['latest_product'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected function latestProduct() : Attribute {
        return new Attribute(
            get: fn() => $this->products()->latest()->take(1)->first()
        );
    }

    public function contents()
    {
        return $this->hasMany(CategoryContent::class);
    }

    public function cmsData()
    {
        $data = $this->contents()->where('key', 'LIKE', 'section%')->get();
        return transformArray($data);
    }

    public function faqData()
    {
        $data = $this->contents()->where('key', 'LIKE', 'faq%')->get();
        return transformArray($data);
    }

    public function headings()
    {
        $data = $this->contents()->where('key', 'LIKE', 'heading%')->get();
        return transformHeadingsArray($data);
    }
}
