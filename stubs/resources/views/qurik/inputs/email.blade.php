@props([
    'icon' => null,
    'label' => 'input.name',
    'model' => null,
    'size' => 'md',
    'color' => 'none',
    'border' => true,
])

@php
    $inputId = $model ? $model . '_input' : null;

    if ($model) {
        $attributes = $attributes->merge([
            'wire:model' => $model,
            'name' => $model,
            'id' => $inputId,
        ]);
    }

    $inputColor = match ($color) {
        'primary' => 'input-primary',
        'secondary' => 'input-secondary',
        'accent' => 'input-accent',
        'info' => 'input-info',
        'success' => 'input-success',
        'warning' => 'input-warning',
        'error' => 'input-error',
        'ghost' => 'input-ghost',
        default => '',
    };

    $inputBorder = match ($border) {
        true => 'input-bordered',
        false => '',
    };

    $inputSize = match ($size) {
        'xs' => 'input-xs',
        'sm' => 'input-sm',
        'md' => 'input-md',
        'lg' => 'input-lg',
    };

@endphp

<label class="form-control w-full">

    <div class="label">
        <span class="label-text">{{ __($label) }}</span>
    </div>

    <label class="input flex items-center gap-2 w-full {{$inputColor}} {{$inputSize}} {{$inputBorder}} @error($model) input-error @enderror">
        
        @if ($icon)
            <span class="{{$icon}} size-4"></span>
        @endif

        <input {{$attributes}} type="email" class="grow" placeholder="{{ __($label) }}" />
    </label>

    @error($model)
        <div class="label">
            <span class="label-text-alt text-error">{{ $message }}</span>
        </div>
    @enderror

</label>