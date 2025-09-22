@props(['href' => '#', 'disabled' => false])

@php
    $classes = ($disabled ?? false)
                ? 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-400 cursor-not-allowed'
                : 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out';
@endphp

@if ($disabled)
    <span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
@else
    <a {{ $attributes->merge(['href' => $href, 'class' => $classes]) }}>{{ $slot }}</a>
@endif
