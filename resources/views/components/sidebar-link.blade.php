@props(['active', 'href' => 'dashboard'])

@php
$classes = $active ? 'block' : 'hidden';
$bgClasses = $active ? 'bg-green-50 dark:bg-shark-600 text-shark-600' : '';
@endphp

<div
    class="relative {{ $bgClasses }} px-6 py-4 inline-flex items-center w-full text-sm font-semibold text-shark-800 transition-colors duration-150
             hover:text-shark-500 dark:hover:text-shark-800 dark:text-shark-100 hover:bg-green-50 dark:hover:bg-shark-500">
    <span class="absolute {{ $classes }}  inset-y-0 left-0 w-1 bg-green-600 " aria-hidden="true"></span>
    {{ $slot }}

</div>
