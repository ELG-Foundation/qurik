@props([
    'type' => 'default',
    'size' => 'md',
])

@php
    $tableType = match ($type) {
        'default' => '',
        'zebra' => 'table-zebra',
        'pin-row' => 'table-pin-rows',
        'pin-col' => 'table-pin-cols',
    };

    $tableSize = match ($size) {
        'xs' => 'table-xs',
        'sm' => 'table-sm',
        'md' => 'table-md',
        'lg' => 'table-lg',
        'xl' => 'table-xl',
    };

@endphp

<div class="overflow-x-auto">
    <table class="table {{ $tableType }} {{ $tableSize }}">
        {{ $slot }}
    </table>
</div>
