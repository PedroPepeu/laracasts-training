@props(['isButton' => false])

@if (!$isButton)
    <a {{ $attributes->merge(['class' => 'text-sm/6 font-semibold']) }}
    >{{ $slot }}</a>
@endif

@if ($isButton)
    <button {{ $attributes->merge([
        'class' => 'text-sm/6 font-semibold',
        'type' => 'button',
        ]) }}>{{ $slot }}</button>
@endif