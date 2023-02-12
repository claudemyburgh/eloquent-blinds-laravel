@props(['theme' => 'black'])

@php
$themeStyle = [
    'primary' => "border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white",
    'white' => "border-2 border-white text-white hover:bg-white hover:text-gray-900",
    'black' => "border-2 border-black text-black hover:bg-black hover:text-white",
    'gray' => "border-2 border-primary-500 text-primary-600 hover:bg-primary-600 hover:text-white",
];
@endphp


<a {{ $attributes->merge(['class' =>  'rounded-md px-6 py-3 inline-flex font-semibold -skew-x-12 ' . $themeStyle[$theme]]) }}>
    <span class="skew-x-12 inline-block">
        {{ $slot }}
    </span>
</a>
