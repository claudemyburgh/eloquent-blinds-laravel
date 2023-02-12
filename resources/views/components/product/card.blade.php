<div {{ $attributes->merge(['class' => 'relative group drop-shadow  hover:z-20 transition-all']) }}>
    <div
        class="relative w-full h-full z-10 bg-white border border-gray-200 rounded-lg flex flex-col flex-1 overflow-hidden hover:shadow-md transition-all">
        <div class="aspect-square bg-gray-200 group-hover:opacity-75 border-b border-gray-200">
            <img src="{{ $product->getFirstMediaUrl('default', 'medium') }}"
                 alt="{{ $product->title }}"
                 height="300"
                 width="300"
                 loading="lazy"
                 class="w-full h-full object-center object-cover sm:w-full sm:h-full">
        </div>
        <div class="flex-1 p-4 space-y-2 flex flex-col">
            <h3 class="text-sm font-medium text-gray-900">
                <a href="{{ route('product.show', [$category, $product]) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $product->title }}
                </a>
            </h3>

            @if($product->excerpt || $product->description)
                <p class="text-gray-500 line-clamp-2">
                    {{ $product->excerpt ?: $product->description }}
                </p>
            @endif
        </div>

    </div>
    <div class="absolute transition-all -inset-[2px] bg-gradient-to-tr from-primary-500 to-secondary-300 z-0 rounded-lg group-hover:scale-[102%]  group-hover:translate-x-1 group-hover:translate-y-1"></div>
</div>
