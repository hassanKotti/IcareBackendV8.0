@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-shark-700']) }}>
    {{ $value ?? $slot }}
</label>
