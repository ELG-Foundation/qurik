@props(['name' => null])

<div class="label">
    @error($name)
    <span class="label-text-alt text-error">{{$message}}</span>
    @enderror
</div>
