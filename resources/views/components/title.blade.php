@props(['type' =>'h1', 'class' => ''])
@php
    switch ($type) {
        case 'h1':
            $classType = 'font-black text-5xl md:text-6xl tracking-tight bg-clip-text text-transparent bg-gradient-to-tr from-primary-500 to-secondary-300';
            break;
        case 'h2':
            $classType = 'font-semibold text-3xl md:text-4xl';
            break;
        case 'h3':
            $classType = 'font-semibold text-xl md:text-2xl';
            break;
        case 'h4':
            $classType = 'font-semibold text-lg md:text-xl';
            break;
        default:
            $classType = 'font-bold text-5xl text-black';
            break;
    }
@endphp

<{{$type}} @class(['tracking-tight font-title italic leading-tight drop-shadow-hard py-2', $classType, $class])">
{{ $slot }}
</{{$type}}>

