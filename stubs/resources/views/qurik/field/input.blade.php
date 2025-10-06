@props(['variant' => 'default', 'size' => 'md'])

@php
    $inputVariant = match ($variant) {
        'ghost' => 'input input-ghost',
        'neutral' => 'input input-neutral',
        'primary' => 'input input-primary',
        'secondary' => 'input input-secondary',
        'accent' => 'input input-accent',
        'info' => 'input input-info',
        'success' => 'input input-success',
        'warning' => 'input input-warning',
        'error' => 'input input-error',
        default => 'input',
    };

    $inputSize = match ($size) {
        'xs' => 'input input-xs',
        'sm' => 'input input-sm',
        'md' => 'input input-md',
        'lg' => 'input input-lg',
        'xl' => 'input input-xl',
        default => 'input input-md',
    };
@endphp

<input {{ $attributes->merge(['class' => "input $inputVariant $inputSize"]) }} />
