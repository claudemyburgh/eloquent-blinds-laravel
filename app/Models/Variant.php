<?php

namespace App\Models;

use App\Eloquent\Traits\MostPopular;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Variant extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    use MostPopular;

    protected $fillable = [
        'sku',
        'colour',
        'material',
        'pattern',
        'thickness',
        'pattern_width',
        'pattern_height',
        'popular',
    ];

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


    public function registerMediaConversions(Media $media = null): void
    {


        $this->addMediaConversion('tiny')
            ->format('webp')
            ->fit(Manipulations::FIT_CROP, 50, 50);

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
        $this->addMediaCollection('variant')
            ->singleFile()
            ->useFallbackUrl(url(config('app.placeholder')));
    }

}
