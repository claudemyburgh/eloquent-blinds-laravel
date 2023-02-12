@props(['type' => 'section', 'size' => 'none'])
@php
$sizes= [
  'none' => 'py-0',
  'xs' => 'py-4',
  'sm' => 'py-6',
  'md' => 'py-12',
  'lg' => 'py-24',
  'xl' => 'py-32'
];
@endphp
<{{$type}} {{ $attributes->merge(['class' => $sizes[$size] . ' wrapper']) }}>
    {{$slot}}
</{{$type}}>
