@props(['active'])

@php
$classes = ($active ?? false)
? 'ml-4 flex items-center px-4 py-2 rounded-l-lg bg-greybg group text-blue'
: 'ml-4 flex items-center px-4 py-2 rounded-l-lg hover:bg-blue-600 group text-blue-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>