@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'flex items-center px-6 py-2 text-gray-300'
        : 'flex items-center px-6 py-2 text-gray-500 hover:text-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
