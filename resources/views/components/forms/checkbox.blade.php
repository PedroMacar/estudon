@props([
    'label' => '',
    'name' => '',
    'id' => '',
    'checked' => false,
    'labelClass' => 'form-check-label text-muted',
    'inputClass' => 'form-check-input input-primary',
    'wrapperClass' => 'form-check',
])

<div class="{{ $wrapperClass }}">
    <input
            type="checkbox"
            name="{{ $name }}"
            id="{{ $id ?: $name }}"
            @if($checked) checked @endif
            {{ $attributes->twMerge(['class' => $inputClass]) }}>

    @if($label)
        <label
                class="{{ $labelClass }}"
                for="{{ $id ?: $name }}">
            {{ $label }}
        </label>
    @endif

    @error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>