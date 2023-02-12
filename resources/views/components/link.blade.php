@props(['href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-primary-600 hover:underline underline-primary-500 relative inline-block']) }}>
    {{ $slot }}
    <span aria-hidden="true" class="absolute -inset-x-1 bottom-1 bg-primary-500/10 h-1/3 rounded-lg"></span>
</a>
