@props([
    'model' => null,
    'lable' => __('auth.password_label'),
    'placeholder' => null,
    'text' => 'text-white',
    'border' => 'border-slate-300',
    'bg' => 'bg-transparent/10'
])

@if ($placeholder)
    @php($attributes = $attributes->merge(['placeholder' => $placeholder]) )
@endif

<div class="w-full flex flex-col gap-y-2 mt-4 {{$text}}">
    <label for="email">{{$lable}}</label>
    <div x-data="{ open: false }" class="w-full relative">

        <span
            class="iconify solar--lock-keyhole-minimalistic-bold text-2xl absolute top-1/2 left-6 -translate-x-1/2 -translate-y-1/2"></span>

        <input {{$attributes}} wire:model="{{$model}}"
            class="w-full py-3 px-12 rounded-xl outline-none border @error($model) bg-error/10 border-error text-error @else {{$bg}} {{$border}} @enderror"
            :type="open ? 'text' : 'password'" name="password">

        <span @click="open = !open"
            :class="open ? 'iconify solar--eye-bold' : 'iconify solar--eye-closed-bold'"
            class="text-2xl absolute top-1/2 right-0 -translate-x-1/2 -translate-y-1/2"></span>

    </div>

    @error($model)
        <p class="text-error w-full text-left">{{$message}}</p>
    @enderror
</div>