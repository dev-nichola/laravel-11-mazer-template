@props(['href' => '', 'label' => '',"icon" => "", "active" => ''])

@php
    $isActive = $active || request()->routeIs($href) ? 'active' : '';
@endphp

<li class="sidebar-item has-sub {{ $isActive }}">
    <a href="{{ $href }}" class='sidebar-link'>
        <i class="{{ $icon }}"></i>
        <span>{{ $label }}</span>
    </a>

    <ul class="submenu ">
        {{ $slot }}
    </ul>
</li>

