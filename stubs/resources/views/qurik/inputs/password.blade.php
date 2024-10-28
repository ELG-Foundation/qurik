@props(['icon' => null])

<div x-data="{open:false}" class="input input-bordered flex items-center gap-x-2">

    @if ($icon)
        <span class="{{$icon}} text-xl"></span>
    @endif

    <input :type="open ? 'text':'password'" type="password" class="grow">

    <span @click="open = !open" :class="open ? 'solar--eye-bold':'solar--eye-closed-bold'" class="iconify text-xl"></span>
</div>
