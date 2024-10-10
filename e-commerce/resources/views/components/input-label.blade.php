@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-black dark:text-black']) }}>
    {{ $value ?? $slot }}
</label>
