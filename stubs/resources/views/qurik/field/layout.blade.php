@props(['title' => ''])

<fieldset {{ $attributes->merge(['class' => 'fieldset']) }}>

    @if ($title)
        <legend class="fieldset-legend">
            {{ $title }}
        </legend>
    @endif

    {{ $slot }}
</fieldset>
