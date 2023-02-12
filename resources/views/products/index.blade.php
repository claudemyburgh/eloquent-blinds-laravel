<x-site-layout>
    <x-hero>
        <x-title>{{ $category->title }}</x-title>
        @if($category->description)
        <x-paragraph class="rounded-md backdrop-blur py-4 max-w-2xl">
            {{ $category->description }}
        </x-paragraph>
        @endif
        <x-slot:image-url>{{ $category->getFirstMediaUrl('default', 'large') }}</x-slot:image-url>
    </x-hero>

    <x-wrapper>
        <x-product.list :$category />
    </x-wrapper>
</x-site-layout>
