@props(['type' => '', 'name' => '', 'placeholder' => '', 'value' => true])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'form-control']) }} value="{{ !empty($value) ? old($name) : '' }}">
