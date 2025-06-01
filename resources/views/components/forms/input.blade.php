@props([
    'label' ,
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'error => false',
    'labelClass' => '',
])

@if (isset($label))
    <label for="{{ isset($name) }}"

           class="block text-sm font-medium text-gray-700 mb-2 {{$labelClass}}">
        {{ $label }}
    </label>
@endif

<input
        type="{{ $type }}"
        name="{{ $name}}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->twMerge(['class' => '' ]) }}>

@error(isset($name))
<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
@enderror