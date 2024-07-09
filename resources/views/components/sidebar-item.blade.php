@props(['href', 'icon', 'label', 'active' => false])

@php
    $isActive = $active || request()->routeIs($href) ? 'active' : '';
@endphp

<li class="sidebar-item {{ $isActive }}">
    <a href="{{ $href }}" class="sidebar-link">
        <i class="{{ $icon }}"></i>
        <span>{{ $label }}</span>
    </a>
</li>
