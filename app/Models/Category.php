<?php

namespace App\Models;

use App\Eloquent\Traits\LiveAware;
use App\Eloquent\Traits\MostPopular;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasRecursiveRelationships;
    use LiveAware;
    use MostPopular;

    protected $fillable = [
        'title',
        'slug',
        'link_description',
        'parent_id',
        'popular',
        'description',
        'excerpt',
        'live',
        'body'
    ];

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }


    public function registerMediaConversions(Media $media = null): void
    {
//        $this->addMediaCollection('categories');

        $this->addMediaConversion('thumb')
            ->format('webp')
            ->fit(Manipulations::FIT_CROP, 100, 100);

        $this->addMediaConversion('small')
            ->format('webp')
            ->fit(Manipulations::FIT_CROP, 200, 200);

        $this->addMediaConversion('medium')
            ->format('webp')
            ->fit(Manipulations::FIT_CROP, 400, 400);

        $this->addMediaConversion('normal')
            ->format('webp')
            ->fit(Manipulations::FIT_CROP, 800, 800);

        $this->addMediaConversion('large')
            ->format('webp')
            ->fit(Manipulations::FIT_CROP, 1600, 1600);

    }

    /**
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('default')
            ->useFallbackUrl(url(config('app.placeholder')));


    }


}
