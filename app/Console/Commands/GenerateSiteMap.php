<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a SiteMap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = SitemapGenerator::create(config('app.url'));

        $sitemap
            ->getSitemap()
            ->add(Url::create('/')->setPriority(1))
            ->add(Url::create('/catalog')->setPriority(1))
            ->add(Url::create('/contact-us')->setPriority(1));

        foreach (Category::all() as $category) {
            $sitemap->getSitemap()->add(Url::create(route('products.index', $category->slug)));
        }

        foreach (Product::all() as $product) {
            $sitemap->getSitemap()->add(Url::create(route('product.show', [$product->category, $product])));
        }
        $sitemap
            ->writeToFile(public_path('sitemap.xml'));
    }
}
