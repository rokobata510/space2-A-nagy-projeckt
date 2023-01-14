@props(['active'])
@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-1 border-pink-600 text-m leading-5 text-pink-600 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-1 border-transparent text-m leading-5 text-pink-800  hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


