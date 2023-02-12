<div class="grid grid-cols-2 gap-4 md:grid-cols-3 md:gap-6 lg:grid-cols-4 lg:gap-x-8 ">
    @foreach($category->products as $product)
        <x-product.card :$product :$category class="hover:scale-110 " />
    @endforeach
</div>

