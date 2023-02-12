<side-scroll class="relative py-12 block overflow-x-scroll pl-4 category-list-component border border-transparent">
    <x-wrapper>
            <div data-draggable class="flex flex-1 space-x-6 whitespace-nowrap draggable">
                @foreach($categories[0]->children as $category)
                    @foreach($category->products as $product)
                        <x-product.card :$product :$category
                                        class="min-w-[200px] md:min-w-[300px] my-10 block carousel-cell product-card"/>
                    @endforeach
                @endforeach
            </div>
    </x-wrapper>
</side-scroll>
