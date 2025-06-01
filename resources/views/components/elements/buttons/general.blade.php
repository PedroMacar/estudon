@props([
    'type' => 'button',
])

<button
        type="{{ $type }}"
        {{ $attributes->twMerge(['class' => 'btn']) }}>
    {{ $slot }}
</button>