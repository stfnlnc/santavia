@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-damask-400 text-sm font-medium leading-5 text-neutral-900 focus:outline-hidden focus:border-red-damask-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-neutral-500 hover:text-neutral-700 hover:border-neutral-300 focus:outline-hidden focus:text-neutral-700 focus:border-neutral-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
