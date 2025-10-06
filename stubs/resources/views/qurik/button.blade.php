@props([
    'variant' => 'default',
    'modifier' => '',
    'size' => 'md',
])

@php

    $btnVariant = match ($variant) {
        'neutral' => 'btn btn-neutral',
        'primary' => 'btn btn-primary',
        'secondary' => 'btn btn-secondary',
        'accent' => 'btn btn-accent',
        'info' => 'btn btn-info',
        'success' => 'btn btn-success',
        'warning' => 'btn btn-warning',
        'error' => 'btn btn-error',
        'outline' => 'btn btn-outline',
        'dash' => 'btn btn-dash',
        'soft' => 'btn btn-soft',
        'ghost' => 'btn btn-ghost',
        'link' => 'btn btn-link',
        default => 'btn',
    };

    $btnSize = match ($size) {
        'xs' => 'btn btn-xs',
        'sm' => 'btn btn-sm',
        'md' => 'btn btn-md',
        'lg' => 'btn btn-lg',
        'xl' => 'btn btn-xl',
        default => 'btn btn-md',
    };

    $btnModify = match ($modifier) {
        'wide' => 'btn btn-wide',
        'block' => 'btn btn-block',
        'square' => 'btn btn-square',
        'circle' => 'btn btn-circle',
        default => '',
    };

@endphp

<button {{ $attributes->merge(['class' => "btn $btnVariant $btnSize $btnModify"]) }}>
    {{ $slot }}
</button>
