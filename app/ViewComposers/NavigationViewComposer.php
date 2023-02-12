<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class NavigationViewComposer
{

    public function compose(View $view)
    {

        $categories = Cache::rememberForever('navigation-categories',  function () {
           return Category::live()->with('media')->orderBy('title')->get();
        });

        $exclude = ['indoor-blinds', 'outdoor-blinds'];

        $categories = collect($categories)->filter(function ($cat) use ($exclude) {
            if (in_array($cat['slug'], $exclude)) {
                return false;
            }
            return true;
        });


        return $view->with('categories', $categories);
    }

}
