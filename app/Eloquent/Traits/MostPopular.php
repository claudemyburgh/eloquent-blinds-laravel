<?php

namespace App\Eloquent\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MostPopular
{

    /**
     * @param Builder $builder
     * @return bool
     */
    public function scopePopular(Builder $builder): Builder
    {
        return $builder->where('popular', true);
    }

    /**
     * @return bool
     */
    public function isPopular(): bool
    {
        return (boolean) $this->popular === true;
    }

    /**
     * @return bool
     */
    public function isNotPopular(): bool
    {
        return !$this->isPopular();
    }


}
