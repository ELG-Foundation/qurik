@props([
    'color' => null,
    'border' => 'full',
    'icon' => null,
    'class' => null,
])

@php
    $inputColor = match ($color) {
        'primary' => 'input-primary',
        'secondary' => 'input-secondary',
        'accent' => 'input-accent',
        'info' => 'input-info',
        'success' => 'input-success',
        'warning' => 'input-warning',
        'error' => 'input-error',
        default => '',
    };

    $inputBorder = match ($border) {
        'full' => 'input-bordered',
        'none' => '',
    };

@endphp

<div class="input flex items-center gap-x-2 {{$inputColor}} {{$inputBorder}} {{$class}}">

    @if ($icon)
        <span class="{{$icon}} text-xl"></span>
    @endif

    <input {{$attributes}} type="text" class="grow">
</div>
