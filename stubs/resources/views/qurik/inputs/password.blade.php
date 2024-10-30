@props([
    'icon' => null,
    'class' => null
])

<div x-data="{ open: false }" class="w-full input input-bordered flex items-center gap-x-2 {{$class}}">

    @if ($icon)
        <span class="{{ $icon }} text-xl"></span>
    @endif

    <input {{ $attributes }} :type="open ? 'text' : 'password'" type="password" class="grow w-full">

    <span @click="open = !open" :class="open ? 'solar--eye-bold' : 'solar--eye-closed-bold'" class="iconify text-xl"></span>
</div>
