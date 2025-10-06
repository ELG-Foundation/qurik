@props(['name' => ''])

@if ($name)
    @error($name)
        <p class="label text-error">
            {{ $message }}
        </p>
    @enderror
@endif
