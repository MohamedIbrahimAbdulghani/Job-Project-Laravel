{{-- @props(['active' => false]) --}}


@php
    $current = "bg-gray-900 text-white";
    $default = "text-gray-300 hover:bg-white/5 hover:text-white";
@endphp

<a href="{{$href}}" aria-current="page" class="block rounded-md  px-3 py-2 text-base font-medium  {{ $active ? $current : $default }}" {{ $attributes }}>
    {{ $slot }}
</a>
