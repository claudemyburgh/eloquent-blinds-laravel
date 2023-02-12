<x-site-layout>
    <x-wrapper size="md" class="py-6 md:py-28">
        <div class="relative">
            <x-title>A full catalog of our products</x-title>
            <x-prose class="my-4">
                <p>
                    We are excited to offer you a wide variety of products to choose from. We have put in a lot of
                    effort to curate a diverse range of products to cater to different needs and preferences
                </p>
                <p>
                    We understand that it can be overwhelming to browse through a long list of products, so we have
                    made
                    it easy for you to find what you're looking for by organizing our products into different
                    categories. You can also use the search bar to narrow down your options.
                </p>
                <p>
                    We take great pride in our selection of products and are confident that you will find something
                    you'll love. Our team is always working hard to bring you the latest and greatest products, so
                    be
                    sure to check back often.
                </p>
            </x-prose>
        </div>

    </x-wrapper>

    <x-wrapper>
        <div class="grid  md:grid-cols-2  lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            @foreach($categories as $category)
                <div class="border border-gray-300 rounded-md bg-white ">
                    <header
                        class="text-gray-600 border-b border-gray-200 rounded-t-md block hover:bg-primary-50/20">
                        <a class="block px-4 py-3 flex justify-between"
                           href="{{ route('products.index', $category) }}">
                            <span class=" font-semibold ">{{ $category->title }}</span>
                            <span>
                                ( {{ $category->children->count() }} )
                            </span>
                        </a>
                    </header>
                    <div>
                        <div>
                            @if($category->children->count() )
                                @foreach($category->children as $child)
                                    <a class="hover:underline px-4 py-2 text-gray-500 flex justify-between hover:bg-primary-50/20"
                                       href="{{ route('products.index', $child) }}">
                                    <span>
                                        {{ $child->title }}
                                    </span>
                                    <small>( {{ $child->products->count() }} ) </small>
                                    </a>
                                @endforeach
                            @else
                                <div class="px-4 py-2 text-gray-500 ">
                                    Product for {{ $category->title }} comming soon.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-wrapper>


</x-site-layout>
