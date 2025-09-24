@props(['isButton' => false])

@if (!$isButton)
    <a {{ $attributes->merge(['class' => 'rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500']) }}
    >{{ $slot }}</a>
@endif

@if ($isButton)
    <button {{ $attributes->merge([
        'class' => 'rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500',
        'type' => 'button',
        ]) }}>{{ $slot }}</button>
@endif