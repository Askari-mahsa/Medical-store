<?php

namespace App\Models;

use App\Traits\Categorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory,Categorizable;
    protected $table="categories";
    protected $primaryKey="id";
    protected $fillable = [
        "title","slug","seo_description","seo_title","canonical","content","indexable","seo_image","thumbnail"
    ];

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("categories")->orderBy("id","desc");
        });
    }

    public function posts()
    {
        return $this->morphedByMany(PostModel::class,"categorizable","categorizables");
    }

    public function getIsIndexableAttribute($value):string
    {
        if($value){
            return "yes";
        } else {
            return "no";
        }
    }
}
