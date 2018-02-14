<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Article extends Model
{
    /**
     * Mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show', 'meta_title',
        'meta_description', 'meta_keywords', 'published', 'created_by', 'modified_by'];

    /**
     * Mutators slug
     *
     * @param string $value - title
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . '-' .
            Carbon::now()->format('dmyHi'));
    }

    /**
     * Polymorphic relation with categories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    /**
     * Get last articles.
     *
     * @param $query
     * @param $count
     * @return mixed
     */
    public function scopeLastArticles($query, $count)
    {
        return $query->latest()->take($count)->get();
    }
}
