@props([
    'label' => 'input.select',
    'model' => null,
    'size' => 'md',
    'color' => 'none',
    'border' => true,
    'placeholder' => 'Select an option',
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
        'primary' => 'select-primary',
        'secondary' => 'select-secondary',
        'accent' => 'select-accent',
        'info' => 'select-info',
        'success' => 'select-success',
        'warning' => 'select-warning',
        'error' => 'select-error',
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
        <span class="label-text">
            {{__($label)}}
        </span>
    </div>

    <select {{$attributes}} class="select select-bordered @error($model) select-error @enderror">

        <option selected>{{$placeholder}}</option>

        {{$slot}}

    </select>

    @error($model)
        <div class="label">
            <span class="label-text-alt text-error">{{$message}}</span>
        </div>
    @enderror
    
</label>