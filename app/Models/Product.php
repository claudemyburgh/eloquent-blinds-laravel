<?php

namespace App\Models;

use App\Eloquent\Traits\MostPopular;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    use MostPopular;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'excerpt',
        'body',
        'live',
        'popular',
        'price',
        "product_range"
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany
     */
    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }

    /**
     * @param Media|null $media
     * @return void
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {

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
            ->fit(Manipulations::FIT_CROP, 1200, 1200);

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
